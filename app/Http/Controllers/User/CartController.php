<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\ProductModel as MainModel;
use App\Models\TaxonomyModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
use Gloudemans\Shoppingcart\Facades\Cart;
#Helper
class CartController extends Controller
{
    private $pathViewController     = "user.pages.cart";
    private $controllerName         = "cart";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        $this->taxonomyModel = new TaxonomyModel();
        View::share('controllerName', $this->controllerName);
    }
    public function add(Request $request)
    {

        $id = $request->id;
       
        Cart::add($id, "Product {$id} ", 1, 9.99);
       return Cart::content();
    }
}
