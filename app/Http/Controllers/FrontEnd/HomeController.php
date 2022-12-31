<?php
namespace App\Http\Controllers\FrontEnd;
use App\Helpers\User;
use App\Http\Controllers\Controller;
use App\Models\ProductGroupModel;
use App\Models\ProductModel;
use App\Models\SupplierModel;
use App\Models\TaxonomyModel;
#Request
#Model
use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class HomeController extends Controller
{
    private $pathViewController     = "frontend.pages.";
    private $controllerName         = "home";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new UserModel();
        $this->productModel = new ProductModel();
        $this->productGroupModel = new ProductGroupModel();
        $this->taxonomyModel = new TaxonomyModel();
        $this->supplierModel = new SupplierModel();
        View::share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {
        $products = $this->productModel->listItems([],['task' => 'list_home']);
        $product_groups =  $this->productGroupModel->listItems([],['task' => 'list_home']);
        $categories = $this->taxonomyModel::withDepth()->get()->toFlatTree();
        $suppliers =  $this->supplierModel->listItems([],['task' => 'list']);
        
        return view(
            "{$this->pathViewController}index",
            [
                'products' => $products,
                'product_groups' => $product_groups,
                'categories' => $categories,
                'suppliers' => $suppliers,
            ]
        );
    }
}
