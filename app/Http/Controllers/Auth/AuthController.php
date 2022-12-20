<?php
namespace App\Http\Controllers\Auth;
use App\Helpers\Notify;
use App\Helpers\Obn;
use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\UserModel as MainModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
// use App\Mail\NewUserMail;
#Helper
class AuthController extends Controller
{
    private $pathViewController     = "auth.pages.";
    private $controllerName         = "auth";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        View::share('controllerName', $this->controllerName);
    }
    public function login(Request $request)
    {
        return view(
            "{$this->pathViewController}login",
            []
        );
    }
    public function register(Request $request)
    {
        return view(
            "{$this->pathViewController}register",
            []
        );
    }
    public function forgetPassword(Request $request)
    {
        return view(
            "{$this->pathViewController}register",
            []
        );
    }
    public function active(Request $request)
    {
        $token = $request->token;
        $user = $this->model->getItem(['token' => $token],['task' => 'token']);
        $msg = null;
        $login_url = route('auth/login');
        if(!$user) {
            $msg = "<span class = 'text-danger'>Tài khoản của bạn không tồn tại trên hệ thống</span>";
        }
        else {
            if($user['status'] == 'active') {
                $msg = "<span class = 'text-warning'>Tài khoản của bạn đã được kích hoạt trước đó.  <br> Vui lòng <a href = '{$login_url}'>đăng nhập</a> để sử dụng hệ thống</span>";
            }
            else {
                $this->model->saveItem(['token' => $token,'status' => 'active'],['task' => 'active-by-token']);
                $msg = "<span class = 'text-success'>Tài khoản của bạn đã được kích hoạt thành công. Vui lòng <a href = '{$login_url}'>đăng nhập</a> để sử dụng hệ thống</span>";
            }
        }
        return view(
            "{$this->pathViewController}active",
            [
                'msg' => $msg,
            ]
        );
    }
    public function postRegister(Request $request)
    {
        $params = $request->all();
        $params['created_at'] = date('Y-m-d H:i:s');
        $params['password'] = md5($params['password']);
        $userCode = [];
        $checkEmail = [];
        $checkUsername = [];
        $error = [];
        // Check email tồn tại
        $checkEmail = $this->model->getItem($params, ['task' => 'email']);
        if ($checkEmail) {
            $error['email'] = "Đã tồn tại Email trên hệ thống";
        }
        // Check username đã tồn tại
        $checkUsername = $this->model->getItem($params, ['task' => 'username']);
        if ($checkUsername) {
            $error['username'] = "Đã tồn tại Tên đăng nhập trên hệ thống";
        }
        if (empty($error)) {
            // Check parent id
            $userCode = $this->model->getItem($params, ['task' => 'code']);
            $parent_id = (!empty($userCode) && isset($userCode['id'])) ? $userCode['id'] : "";
            $params['parent_id'] = $parent_id;
            $params['status'] = 'pending';
            $params['role'] = 'user';
            $params['code'] = config('obn.prefix.code') . Obn::generateUniqueCode();
            $params['token'] = $params['_token'];
            $status = 200;
            $msg = "Bạn đã đăng ký tài khoản thành công! Vui lòng kiểm tra Email để kích hoạt tài khoản và đăng nhập vào hệ thống!";
            $this->model->saveItem($params,['task' => 'add-item']);
            try {
                Notify::sendMailRegisterUser($params);
            } catch (\Throwable $th) {
                // $status = 400;
                // $error['email'] = "Gửi mail không thành công";
            }
        } else {
            $status = 400;
            $msg = $error;
        }
        $params['status'] = $status;
        $params['msg'] = $msg;
        
        // $request->session()->push('userInfo', $userInfo);
        return response()->json($params);
    }
}
