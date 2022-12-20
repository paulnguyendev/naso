<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\UserModel;
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
        $this->model = new UserModel();
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
        return response()->json($params);
    }
}
