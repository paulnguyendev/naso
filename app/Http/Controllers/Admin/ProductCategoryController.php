<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\TaxonomyModel as MainModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class ProductCategoryController extends Controller
{
    private $pathViewController     = "admin.pages.productCategory.";
    private $controllerName         = "productCategory";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        View::share('controllerName', $this->controllerName);
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
        $categories = $this->model::withDepth()->get()->toFlatTree()->where('taxonomy', 'product_cat')->pluck('name_with_depth', 'id');
        return view(
            "{$this->pathViewController}form",
            [
                'categories' => $categories,
            ]
        );
    }
    public function save(Request $request)
    {
        $params = $request->all();
        $error = [];
        if (!$params['name']) {
            $error['name'] = "Chưa nhập tên danh mục";
        }
        if (empty($error)) {
            $params['created_at'] = date('Y-m-d H:i:s');
            $this->model->saveItem($params, ['task' => 'add-item']);
            $params['redirect'] = route('productCategory/index');
            return response()->json($params);
        } else {
            return response()->json(
                $error,
                422,
            );
        }
    }
    public function dataList(Request $request)
    {
        return $result = [
            "draw" => 0,
            "recordsTotal" => 2,
            "recordsFiltered" => 2,
            "data" => [
                [
                    "id" => "297",
                    "parent_id" => "0",
                    "taxonomy" => "product",
                    "sort_order" => "0",
                    "thumbnail" => "",
                    "description" => [
                        "title" => "Dự án",
                        "cat_id" => "297",
                        "lang_code" => "vi"
                    ],
                    "seo" => [
                        "id" => "1040",
                        "slug" => "du-an",
                        "robots" => "1",
                        "taxonomy_type" => "category",
                        "taxonomy_id" => "297",
                        "lang_code" => "vi",
                        "meta_title" => "Dự án",
                        "meta_keyword" => "Dự án",
                        "meta_description" => "Mô tả trang Dự án",
                        "other_link" => "",
                        "is_newtab_other_link" => ""
                    ],
                    "depth" => "0",
                    "route_edit" => "https://dainghiagroup.com/admin/product/category/297/edit",
                    "route_remove" => "https://dainghiagroup.com/admin/product/category/297",
                    "move_up" => "https://dainghiagroup.com/admin/product/category/297/move?direction=up",
                    "move_down" => "https://dainghiagroup.com/admin/product/category/297/move?direction=down",
                    "move_top" => "https://dainghiagroup.com/admin/product/category/297/move?direction=top",
                    "move_bottom" => "https://dainghiagroup.com/admin/product/category/297/move?direction=bottom"
                ],
                [
                    "id" => "298",
                    "parent_id" => "297",
                    "taxonomy" => "product",
                    "sort_order" => "0",
                    "thumbnail" => "",
                    "description" => [
                        "title" => "Nhà đất bán",
                        "cat_id" => "298",
                        "lang_code" => "vi"
                    ],
                    "seo" => [
                        "id" => "1041",
                        "slug" => "nha-dat-ban",
                        "robots" => "1",
                        "taxonomy_type" => "category",
                        "taxonomy_id" => "298",
                        "lang_code" => "vi",
                        "meta_title" => "Nhà đất bán",
                        "meta_keyword" => "Nhà đất bán",
                        "meta_description" => "Mô tả trang Nhà đất bán",
                        "other_link" => "",
                        "is_newtab_other_link" => ""
                    ],
                    "depth" => "1",
                    "route_edit" => "https://dainghiagroup.com/admin/product/category/298/edit",
                    "route_remove" => "https://dainghiagroup.com/admin/product/category/298",
                    "move_up" => "https://dainghiagroup.com/admin/product/category/298/move?direction=up",
                    "move_down" => "https://dainghiagroup.com/admin/product/category/298/move?direction=down",
                    "move_top" => "https://dainghiagroup.com/admin/product/category/298/move?direction=top",
                    "move_bottom" => "https://dainghiagroup.com/admin/product/category/298/move?direction=bottom"
                ],
               
            ]
        ];
        return "!23";
    }
}
