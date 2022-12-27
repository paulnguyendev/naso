<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;
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
        Route::controller(HomeController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
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
            Route::post('/save/{id?}', 'save')->name($routeName . '/save');
            Route::get('/data/list', 'dataList')->name($routeName . '/dataList');
        });
    });
    Route::prefix('product')->group(function () {
        $routeName = "product";
        Route::controller(ProductController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
            Route::get('/form/{id?}', 'form')->name($routeName . '/form');
        });
    });
    Route::prefix('media')->group(function () {
        $routeName = "media";
        Route::controller(MediaController::class)->group(function () use ($routeName) {
            Route::get('/folders', 'folders')->name($routeName . '/folders');
            Route::post('/action', 'action')->name($routeName . '/action');
            // Route::get('/form/{id?}', 'form')->name($routeName . '/form');
        });
    });
    Route::prefix('profile')->group(function () {
        $routeName = "admin_profile";
        Route::controller(HomeController::class)->group(function () use ($routeName) {
            Route::get('/', 'index')->name($routeName . '/index');
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
