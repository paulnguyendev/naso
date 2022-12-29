<?php
namespace App\Http\Controllers\User;
use App\Helpers\Link\OrderLink;
use App\Helpers\Obn;
use App\Helpers\User;
use App\Http\Controllers\Controller;
use App\Models\ProductMetaModel;
#Request
#Model
use App\Models\OrderModel as MainModel;
use App\Models\TaxonomyModel;
use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class OrderController extends Controller
{
    private $pathViewController     = "user.pages.order";
    private $controllerName         = "order";
    private $model;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        $this->taxonomyModel = new TaxonomyModel();
        $this->productMetaModel = new ProductMetaModel();
        $this->userModel = new UserModel();
        View::share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {
        return view(
            "{$this->pathViewController}/index",
            []
        );
    }
    public function dataList(Request $request)
    {
        $result = [];
        $user_id = User::getInfo('','id');
        $items = $this->model->listItems(['user_id' => $user_id], ['task' => 'user_id']);
        $total = count($items);
        $items = $total > 0 ? $items->toArray() : [];
        $items =  array_map(function ($item) {
            $id = $item['id'];
            $item['created_at'] = date('H:i:s d/m/Y',strtotime($item['created_at']));
            $order = $this->model::find($item['id']);
            $item['total'] = number_format($item['total']) . " đ";
            $item['user'] = $order->user()->first();
            $item['route_edit'] = OrderLink::detail($id);
            #_Status
            $status = $item['status'];
            $status = $status ? $status : 'default';
            $tpl_status = config('obn.status.template');
            $current_status = isset($tpl_status[$status]) ? $tpl_status[$status] : $tpl_status['default'];
            $xhtml_status = sprintf('<span class = "badge %s">%s</span>',$current_status['class'],$current_status['name']);
            $item['status'] = $xhtml_status;
            #_Payment
            $payment = json_decode($item['payment'],true);
            $payment_name =  isset($payment['method_title']) ? $payment['method_title'] : "-";
            $item['payment'] = $payment_name;
            #_Info Order
            $info_order = json_decode($item['info_order'],true);
            $fullname = isset($info_order['fullname']) ? $info_order['fullname'] : "-";
            $phone = isset($info_order['phone']) ? $info_order['phone'] : "-";
            $item['info_order'] = "{$fullname} <br> <small>Điện thoại: <a href = 'tel:{$phone}'>{$phone}</a></small>";
            return $item;
        }, $items);
        $result = [
            'draw' => 0,
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $items,
        ];
        return $result;
    }
    public function destroyMulti(Request $request)
    {
        $result = [];
        return $result;
    }
    public function detail(Request $request) {
        $id = $request->id;
        return $id;
    }
    public function customer(Request $request) {
        return view(
            "{$this->pathViewController}/customer",
            []
        );
    }
    public function dataCustomer(Request $request) {
        $user_id = User::getInfo('','id');
        $items = $this->model->listItems(['user_id' => $user_id], ['task' => 'user_id']);
        $total = count($items);
        $items = $total > 0 ? $items->toArray() : [];
        $customers = array_column($items,'info_order');
        $customers = array_map(function($item) {
            $item = json_decode($item,true);
            $item['route_edit'] = "#";
            return $item;
        },$customers);
        $result = [
            'draw' => 0,
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $customers,
        ];
        return $result;
    }
    public function income(Request $request) {
        return view(
            "{$this->pathViewController}/income",
            []
        );
    }
    public function dataIncome(Request $request) {
        $user_id = User::getInfo('','id');
        $user =  $this->userModel::find($user_id);
        $items = $user->payment_history()->orderBy('id','desc')->get();
        $total = $user->payment_history()->count();
        $items = $total > 0 ? $items->toArray() : [];
        $items = array_map(function($item){
            $item['route_edit'] = "#";
            $order = $this->model::find($item['order_id']);
            $code = $order->code;
            $order_total =  $order->total;
            $item['code'] = $code;
            $item['order_total'] = $order_total;
            $item['show_status'] = Obn::showStatus($item['status']);
            $item['show_total_commission'] = number_format($item['total_commission']) . " đ";
            $item['show_order_total'] = number_format($item['order_total']) . " đ";
            return $item;
        },$items);
       
        $result = [
            'draw' => 0,
            'recordsTotal' => $total,
            'recordsFiltered' => $total,
            'data' => $items,
        ];
        return $result;
    }
} 
