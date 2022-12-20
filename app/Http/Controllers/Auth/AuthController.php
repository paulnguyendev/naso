<?php
namespace App\Http\Controllers\Auth;
use App\Helpers\Obn;
use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\UserModel as MainModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
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
    public function postRegister(Request $request) {
        $params = $request->all();
        $params['created_at'] = date('Y-m-d H:i:s');
        $params['password'] = md5($params['password']);
        $this->model->saveItem($params,['task' => 'add-item']);
        // $request->session()->push('userInfo', $userInfo);
        return response()->json($params);
    }
}
