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
        $number = $request->number;
        
        if(!$number) {
            $number = 1;
        }
       
        Cart::add($id, "Product {$id} ", $number, 9.99);
        $cartData = Cart::content();
        $cartTotal = Cart::count();
        $result = [
            'cartData' => $cartData,
            'cartTotal' => $cartTotal,
        ];
       return response()->json($result);
    }
    public function index(Request $request) {
        return view(
            "{$this->pathViewController}/index",
            []
        );
    }
    public function removeAll(Request $request) {
        Cart::destroy();
        return Cart::content();
    }
    public function data(Request $request) {
        return Cart::content();
    }
}
