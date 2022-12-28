<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ProductMetaModel;
use App\Models\SupplierModel;
use App\Models\TaxonomyModel;
#Request
#Model
use App\Models\ProductModel as MainModel;
use App\Models\TaxonomyRelationshipModel;
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
        $this->taxonomyRelationshipModel = new TaxonomyRelationshipModel();
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
        $id = $request->id;
        $item = $this->model->getItem(['id' => $id], ['task' => 'id']);
        $item_meta = $this->productMetaModel->getItem(['product_id' => $id], ['task' => 'product_id']);
        $taxonomy = [];
        $taxonomy_ids = [];
        $taxonomy_second_ids = [];
        if ($id) {
            $taxonomy = $this->model::find($id)->taxonomy()->get();
            $taxonomy = $taxonomy ? $taxonomy->toArray() : [];
            $taxonomySecond = $this->model::find($id)->taxonomy()->where('taxonomy_type', 'second')->get();
            $taxonomySecond = $taxonomySecond ? $taxonomySecond->toArray() : [];
            $taxonomy_ids = array_column($taxonomy, 'id');
            $taxonomy_second_ids = array_column($taxonomySecond, 'id');
        }
        return view(
            "{$this->pathViewController}form",
            [
                'categories' => $categories,
                'suppliers' => $suppliers,
                'item' => $item,
                'id' => $id,
                'item_meta' => $item_meta,
                'taxonomy_ids' => $taxonomy_ids,
                'taxonomy_second_ids' => $taxonomy_second_ids,
            ]
        );
    }
    public function save(Request $request)
    {
        $params = $request->all();
        $id = isset($params['id']) ? $params['id'] : "";
        $is_published = isset($params['is_published']) ? $params['is_published'] : "1";
        $error = [];
        $paramsProduct = [];
        $paramsMeta = [];
        $paramsTaxonomyRelationship = [];
        $taxonomyList = [];
        if (!$params['title']) {
            $error['title'] = "Chưa nhập tên sản phẩm";
        }
        if (!$params['supplier_id']) {
            $error['supplier_id'] = "Chưa chọn nhà cung cấp";
        }
        if (!$params['slug']) {
            $error['slug'] = "Chưa chọn đường dẫn";
        }
        if ($params['price_sale'] > $params['price']) {
            $error['price_sale'] = "Giá khuyến mãi không được lớn hơn giá gốc";
        }
        if (empty($error)) {
            $created_at = date('Y-m-d H:i:s');
            $params['created_at'] = date('Y-m-d H:i:s');
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
                'is_published' => $is_published,
                'created_at' => $params['created_at'],
                'supplier_id' => $params['supplier_id'],
            ];
            $paramsMeta = [
                'description' => $params['description'],
                'content' => $params['content'],
                'gallery' => $params['gallery'],
                'created_at' => $created_at,
            ];
            $cat_id = isset($params['cat_id']) ? $params['cat_id'] : "";
            $other_cat_ids = isset($params['other_cat_ids']) ? $params['other_cat_ids'] : [];
            if (!$id) {
                #_Add Product
                $product_id = $this->model->saveItem($paramsProduct, ['task' => 'add-item']);
                if ($product_id) {
                    #_Add Product Meta
                    $paramsMeta['product_id'] = $product_id;
                    $this->productMetaModel->saveItem($paramsMeta, ['task' => 'add-item']);
                    #_Add Taxonomy Relationships
                    $taxonomyMain = [
                        [
                            'product_id' => $product_id,
                            'taxonomy_id' => $cat_id,
                            'taxonomy_type' => 'main',
                        ]
                    ];
                    $taxonomySecond = [];
                    if (count($other_cat_ids) > 0) {
                        foreach ($other_cat_ids as $key_otherCatID => $other_cat_id) {
                            $taxonomySecond[$key_otherCatID]['taxonomy_id'] = $other_cat_id;
                            $taxonomySecond[$key_otherCatID]['taxonomy_type'] = 'second';
                            $taxonomySecond[$key_otherCatID]['product_id'] = $product_id;
                        }
                        $taxonomyList = array_merge($taxonomyMain, $taxonomySecond);
                    } else {
                        $taxonomyList = $taxonomyMain;
                    }
                    if (count($taxonomyList) > 0) {
                        foreach ($taxonomyList as $paramsTaxonomyRelationship) {
                            $this->taxonomyRelationshipModel->saveItem($paramsTaxonomyRelationship, ['task' => 'add-item']);
                        }
                    }
                }
            } else {
                #_Edit Product
                $paramsProduct['id'] = $id;
                $this->model->saveItem($paramsProduct, ['task' => 'edit-item']);
                #_Edit product meta
                $paramsMeta['product_id'] = $id;
                $this->productMetaModel->saveItem($paramsMeta, ['task' => 'edit-item']);
                #_Edit taxonomy relationship
                if (count($other_cat_ids) > 0) {
                    #_Delete item cũ
                    $taxonomy = $this->model::find($id)->taxonomy()->get()->toArray();
                    if (count($taxonomy) > 0) {
                        foreach ($taxonomy as $item_taxonomy) {
                            $this->taxonomyRelationshipModel->deleteItem(
                                [
                                    'taxonomy_id' => $item_taxonomy['id'],
                                    'product_id' => $id,
                                ],
                                ['task' => 'taxonomy_id']
                            );
                        }
                    }
                    #_Add item mới
                    $taxonomyMain = [
                        [
                            'product_id' => $id,
                            'taxonomy_id' => $cat_id,
                            'taxonomy_type' => 'main',
                        ]
                    ];
                    $taxonomySecond = [];
                    if (count($other_cat_ids) > 0) {
                        foreach ($other_cat_ids as $key_otherCatID => $other_cat_id) {
                            $taxonomySecond[$key_otherCatID]['taxonomy_id'] = $other_cat_id;
                            $taxonomySecond[$key_otherCatID]['taxonomy_type'] = 'second';
                            $taxonomySecond[$key_otherCatID]['product_id'] = $id;
                        }
                        $taxonomyList = array_merge($taxonomyMain, $taxonomySecond);
                    } else {
                        $taxonomyList = $taxonomyMain;
                    }
                    if (count($taxonomyList) > 0) {
                        foreach ($taxonomyList as $paramsTaxonomyRelationship) {
                            $this->taxonomyRelationshipModel->saveItem($paramsTaxonomyRelationship, ['task' => 'add-item']);
                        }
                    }
                }
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
