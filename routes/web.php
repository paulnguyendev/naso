<?php
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FrontEnd\AffiliateController;
use App\Http\Controllers\FrontEnd\CartController as FrontEndCartController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\ProductController as FrontEndProductController;
use App\Http\Controllers\User\AffiliateController as UserAffiliateController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use App\Http\Controllers\User\SupplierController as UserSupplierController;
use App\Http\Controllers\User\TicketController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\EventListener\ProfilerListener;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// HomePage
$prefix = config('obn.prefix.homepage');
Route::prefix($prefix)->group(function () {
    $routeName = "home";
    Route::controller(HomeController::class)->group(function () use ($routeName) {
        Route::get('/', 'index')->name($routeName . '/index');
    });
    Route::prefix('cart')->group(function () {
        $routeName = "fe_cart";
        Route::controller(FrontEndCartController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/data', 'data')->name($routeName . '/data');
            Route::get('/product', 'product')->name($routeName . '/product');
            Route::get('/add/{id?}/{number?}', 'add')->name($routeName . '/add');
            Route::get('/update/{id?}/{number?}', 'update')->name($routeName . '/update');
            Route::get('/remove/{id?}/{number?}', 'remove')->name($routeName . '/remove');
            Route::get('/removeAll', 'removeAll')->name($routeName . '/removeAll');
            Route::get('/test', 'test')->name($routeName . '/test');
            Route::post('/order', 'order')->name($routeName . '/order');
            Route::get('/order_success/{code?}', 'order_success')->name($routeName . '/order_success');
        });
    });
    Route::prefix('product')->group(function () {
        $routeName = "fe_product";
        Route::controller(FrontEndProductController::class)->group(function () use ($routeName) {
            Route::get('/{id?}', 'detail')->name($routeName . '/detail');
            Route::get('/category/{id?}', 'category')->name($routeName . '/category');
            Route::get('/supplier/{id?}', 'supplier')->name($routeName . '/supplier');
        });
    });
    Route::prefix('aff')->group(function () {
        $routeName = "fe_aff";
        Route::controller(AffiliateController::class)->group(function () use ($routeName) {
            Route::get('/{code?}', 'index')->name($routeName . '/index');
            Route::get('/{code?}/register', 'register')->name($routeName . '/register');
            Route::get('/{code?}/product/{product_id?}', 'product')->name($routeName . '/product');
        });
    });
   
    // Route::controller(HomeController::class)->group(function () use ($routeName) {
    //     Route::get('/aff/{?username}', 'index')->name($routeName . '/index');
    // });
});
// User
$prefix = config('obn.prefix.user');
// ::middleware('access.userDashboard')
Route::middleware('access.userDashboard')->prefix($prefix)->group(function () {
    $routeName = "user";
    Route::controller(DashboardController::class)->group(function () use ($routeName) {
        Route::get('/', 'index')->name($routeName . '/index');
    });
    Route::prefix('profile')->group(function () {
        $routeName = "user_profile";
        Route::controller(UserProfileController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form', 'form')->name($routeName . '/form');
            Route::post('/save', 'save')->name($routeName . '/save');
        });
    });
    Route::prefix('supplier')->group(function () {
        $routeName = "user_supplier";
        Route::controller(UserSupplierController::class)->group(function () use ($routeName) {
            Route::get('/{id?}', 'index')->name($routeName . '/index');
        });
    });
    Route::prefix('product')->group(function () {
        $routeName = "user_product";
        Route::controller(UserProductController::class)->group(function () use ($routeName) {
            Route::get('/{id?}', 'detail')->name($routeName . '/detail');
        });
    });
    Route::prefix('cart')->group(function () {
        $routeName = "cart";
        Route::controller(CartController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/data', 'data')->name($routeName . '/data');
            Route::get('/product', 'product')->name($routeName . '/product');
            Route::get('/add/{id?}/{number?}', 'add')->name($routeName . '/add');
            Route::get('/update/{id?}/{number?}', 'update')->name($routeName . '/update');
            Route::get('/remove/{id?}/{number?}', 'remove')->name($routeName . '/remove');
            Route::get('/removeAll', 'removeAll')->name($routeName . '/removeAll');
            Route::get('/test', 'test')->name($routeName . '/test');
            Route::post('/order', 'order')->name($routeName . '/order');
        });
    });
    Route::prefix('order')->group(function () {
        $routeName = "user_order";
        Route::controller(OrderController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/dataList', 'dataList')->name($routeName . '/dataList');
            Route::get('/customer', 'customer')->name($routeName . '/customer');
            Route::get('/dataCustomer', 'dataCustomer')->name($routeName . '/dataCustomer');
            Route::get('/income', 'income')->name($routeName . '/income');
            Route::get('/dataIncome', 'dataIncome')->name($routeName . '/dataIncome');
            Route::get('/detail/{id?}', 'detail')->name($routeName . '/detail');
            Route::delete('/destroy-multi/{id?}', 'destroyMulti')->name($routeName . '/destroy-multi');
        });
    });
    Route::prefix('aff')->group(function () {
        $routeName = "user_aff";
        Route::controller(UserAffiliateController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form', 'form')->name($routeName . '/form');
            Route::get('/dataList', 'dataList')->name($routeName . '/dataList');
            Route::post('/save', 'save')->name($routeName . '/save');
        });
    });
    Route::prefix('ticket')->group(function () {
        $routeName = "user_ticket";
        Route::controller(TicketController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form/{id?}', 'form')->name($routeName . '/form');
            Route::get('/dataList', 'dataList')->name($routeName . '/dataList');
            Route::post('/save', 'save')->name($routeName . '/save');
        });
    });
});
// Admin
$prefix = config('obn.prefix.admin');
Route::middleware('access.adminDashboard')->prefix($prefix)->group(function () {
    $routeName = "admin";
    Route::controller(AdminDashboardController::class)->group(function () use ($routeName) {
        Route::get('/', 'index')->name($routeName . '/index');
    });
    Route::prefix('product-category')->group(function () {
        $routeName = "productCategory";
        Route::controller(ProductCategoryController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form/{id?}', 'form')->name($routeName . '/form');
            Route::delete('/delete/{id?}', 'delete')->name($routeName . '/delete');
            Route::delete('/destroy-multi/{id?}', 'destroyMulti')->name($routeName . '/destroy-multi');
            Route::post('/save/{id?}', 'save')->name($routeName . '/save');
            Route::get('/data/list', 'dataList')->name($routeName . '/dataList');
        });
    });
    Route::prefix('supplier')->group(function () {
        $routeName = "supplier";
        Route::controller(SupplierController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form/{id?}', 'form')->name($routeName . '/form');
            Route::delete('/delete/{id?}', 'delete')->name($routeName . '/delete');
            Route::delete('/destroy-multi/{id?}', 'destroyMulti')->name($routeName . '/destroy-multi');
            Route::post('/save/{id?}', 'save')->name($routeName . '/save');
            Route::get('/data/list', 'dataList')->name($routeName . '/dataList');
        });
    });
    Route::prefix('product')->group(function () {
        $routeName = "product";
        Route::controller(ProductController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form/{id?}', 'form')->name($routeName . '/form');
            Route::post('/save/{id?}', 'save')->name($routeName . '/save');
            Route::patch('/updateField/{id?}', 'updateField')->name($routeName . '/updateField');
            Route::delete('/delete/{id?}', 'delete')->name($routeName . '/delete');
            Route::get('/dataList', 'dataList')->name($routeName . '/dataList');
            Route::delete('/destroyMulti', 'destroyMulti')->name($routeName . '/destroyMulti');
        });
    });
    Route::prefix('post')->group(function () {
        $routeName = "post";
        Route::controller(ProductController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form/{id?}', 'form')->name($routeName . '/form');
            Route::post('/save/{id?}', 'save')->name($routeName . '/save');
        });
    });
    Route::prefix('media')->group(function () {
        $routeName = "media";
        Route::controller(MediaController::class)->group(function () use ($routeName) {
            Route::get('/folders', 'folders')->name($routeName . '/folders');
            Route::post('/action', 'action')->name($routeName . '/action');
            Route::post('/upload', 'upload')->name($routeName . '/upload');
            // Route::get('/form/{id?}', 'form')->name($routeName . '/form');
        });
    });
    Route::prefix('profile')->group(function () {
        $routeName = "admin_profile";
        Route::controller(ProfileController::class)->group(function () use ($routeName) {
            Route::get('/index', 'index')->name($routeName . '/index');
            Route::get('/form', 'form')->name($routeName . '/form');
            Route::post('/save', 'save')->name($routeName . '/save');
        });
    });
    Route::prefix('order')->group(function () {
        $routeName = "admin_order";
        Route::controller(AdminOrderController::class)->group(function () use ($routeName) {
            Route::get('/index', 'index')->name($routeName . '/index');
            Route::get('/detail/{id?}', 'detail')->name($routeName . '/detail');
            Route::get('/form', 'form')->name($routeName . '/form');
            Route::delete('/delete/{id?}', 'delete')->name($routeName . '/delete');
            Route::post('/save/{id?}', 'save')->name($routeName . '/save');
            Route::post('/saveInfo/{type?}/{id?}', 'saveInfo')->name($routeName . '/saveInfo');
            Route::delete('/destroyMulti', 'destroyMulti')->name($routeName . '/destroyMulti');
            Route::get('/dataList', 'dataList')->name($routeName . '/dataList');
        });
    });
});
// Authen User
$prefix = config('obn.prefix.auth');
Route::prefix($prefix)->group(function () {
    $routeName = "auth";
    Route::controller(AuthController::class)->group(function () use ($routeName) {
        Route::get('/login123', 'login')->name($routeName . '/login123');
        Route::get('/login', 'login')->name($routeName . '/login')->middleware('check.login');
        Route::get('/logout', 'logout')->name($routeName . '/logout');
        Route::get('/register', 'register')->name($routeName . '/register');
        Route::get('/active/{token}', 'active')->name($routeName . '/active');
        Route::post('/postRegister', 'postRegister')->name($routeName . '/postRegister');
        Route::post('/postLogin', 'postLogin')->name($routeName . '/postLogin');
        // Route::get('/active/{code}', 'active')->name($routeName . '/active')->middleware('check.statusActive');
        // Route::post('/post-active/{code}', 'postActive')->name($routeName . '/postActive')->middleware('check.statusActive');
        // Route::get('/quickLogin/{email}-{phone}', 'quickLogin')->name($routeName . '/quickLogin');
        // Route::post('/post-login', 'postLogin')->name($routeName . '/postLogin');
        // Route::post('/post-register', 'postRegister')->name($routeName . '/postRegister');
        // Route::get('/forget-password', 'forgetPassword')->name($routeName . '/forgetPassword');
        // Route::post('/post-forget-password', 'postForgetPassword')->name($routeName . '/postForgetPassword');
        // Route::get('/new-password', 'newPassword')->name($routeName . '/newPassword');
        // Route::get('/test-mail', 'testMail')->name($routeName . '/testMail');
    });
});
// Authen admin
$prefix = config('obn.prefix.admin_auth');
Route::prefix($prefix)->group(function () {
    $routeName = "admin_auth";
    Route::controller(AuthAdminController::class)->group(function () use ($routeName) {
        Route::get('/login', 'login')->name($routeName . '/login')->middleware('check.login_admin');
        Route::get('/logout', 'logout')->name($routeName . '/logout');
        Route::post('/postLogin', 'postLogin')->name($routeName . '/postLogin');
    });
});
