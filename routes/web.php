<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;

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

// Auth::routes();
Route::prefix('/')->middleware(['auth'])->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/xem-chi-tiet/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('web.product.show');
Route::get('/xem-danh-muc/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('web.category.show');
Route::get('/gio-hang', [App\Http\Controllers\CartController::class, 'index'])->name('web.cart.index');
Route::post('/them-vao-gio-hang', [App\Http\Controllers\CartController::class, 'add_to_cart'])->name('web.cart.add_to_cart');
Route::post('/cap-nhat-gio-hang', [App\Http\Controllers\CartController::class, 'update_cart'])->name('web.cart.update_cart');
Route::get('/thanh-toan', [App\Http\Controllers\PayController::class, 'thanh_toan'])->name('web.thanh_toan');
Route::post('/xu-li-thanh-toan', [App\Http\Controllers\PayController::class, 'xu_li_thanh_toan'])->name('web.xu_li_thanh_toan');
Route::get('/thanh-toan-thanh-cong/{order_id}', [App\Http\Controllers\PayController::class, 'thanh_toan_thanh_cong'])->name('web.thanh_toan_thanh_cong');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/quan-ly', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::resource('categories',CategoryController::class);
    Route::get('/thung-rac', [ProductController::class, 'Garbage'])->name('admin.garbage');
    Route::delete('/xoa-luon/{id}', [ProductController::class, 'forceDelete'])->name('admin.forceDelete');
    Route::get('/tai-su-dung/{id}', [ProductController::class, 'restore'])->name('admin.restore');
    Route::get('products/export', [ProductController::class, 'export'])->name('admin.export');
    Route::resource('products',ProductController::class);
   
    Route::get('logout',[UserController::class,'logout'])->name('admin.logout');
    Route::resource('users',UserController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('customers',CustomerController::class);
});
});
Route::post('login',[UserController::class,'login'])->name('admin.login');
Route::get('checkLogin',[UserController::class,'checkLogin'])->name('admin.checkLogin');
