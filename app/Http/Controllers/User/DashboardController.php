<?php
namespace App\Http\Controllers\User;
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
class DashboardController extends Controller
{
    private $pathViewController     = "user.pages.";
    private $controllerName         = "dashboard";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new UserModel();
        View::share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {
        return view(
            "{$this->pathViewController}dashboard",
            []
        );
    }
}
