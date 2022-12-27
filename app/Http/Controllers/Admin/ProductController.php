<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ProductMetaModel;
use App\Models\SupplierModel;
use App\Models\TaxonomyModel;
#Request
#Model
use App\Models\ProductModel as MainModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class ProductController extends Controller
{
    private $pathViewController     = "admin.pages.product.";
    private $controllerName         = "product";
    private $title         = "Sản phẩm";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        $this->taxonomyModel = new TaxonomyModel();
        $this->supplierModel = new SupplierModel();
        $this->productMetaModel = new ProductMetaModel();
        View::share('controllerName', $this->controllerName);
        View::share('title', $this->title);
    }
    public function index(Request $request)
    {
        return view(
            "{$this->pathViewController}index",
            []
        );
    }
    public function form(Request $request)
    {
        $categories = $this->taxonomyModel::withDepth()->get()->toFlatTree()->where('taxonomy', 'product_cat')->pluck('name_with_depth', 'id');
        $suppliers =  $this->supplierModel->listItems([], ['task' => 'list']);
        return view(
            "{$this->pathViewController}form",
            [
                'categories' => $categories,
                'suppliers' => $suppliers,
            ]
        );
    }
    public function save(Request $request)
    {
        $params = $request->all();
        $id = $request->id;
        $error = [];
        $paramsProduct = [];
        $paramsMeta = [];
        if (!$params['title']) {
            $error['title'] = "Chưa nhập tên sản phẩm";
        }
        if (!$params['supplier_id']) {
            $error['supplier_id'] = "Chưa chọn nhà cung cấp";
        }
        if (empty($error)) {
            $created_at = date('Y-m-d H:i:s');
            $params['created_at'] = date('Y-m-d H:i:s');
            if (!$id) {
                #_Add Product
                $paramsProduct = [
                    'title' => $params['title'],
                    'code' => $params['code'],
                    'slug' => $params['slug'],
                    'thumbnail' => $params['thumbnail'],
                    'point' => $params['point'],
                    'sale_price' => $params['price_sale'],
                    'regular_price' => $params['price'],
                    'percent' => $params['percent'],
                    'in_stock' => $params['in_stock'],
                    'stock' => $params['stock'],
                    'is_published' => $params['is_published'],
                    'created_at' => $params['created_at'],
                    'supplier_id ' => $params['supplier_id'],
                ];
                $product_id = $this->model->saveItem($paramsProduct, ['task' => 'add-item']);
                if ($product_id) {
                    $paramsMeta = [
                        'product_id' => $product_id,
                        'description' => $params['description'],
                        'content' => $params['content'],
                        'gallery' => $params['gallery'],
                        'created_at' => $created_at,
                    ];
                    #_Add Product Meta
                    $this->productMetaModel->saveItem($paramsMeta,['task' => 'add-item']);
                    #_Add Taxonomy Relationships
                }
            } else {
                $this->model->saveItem($params, ['task' => 'edit-item']);
            }
            $params['redirect'] = route("{$this->controllerName}/index");
            return response()->json($params);
        } else {
            return response()->json(
                $error,
                422,
            );
        }
    }
}
