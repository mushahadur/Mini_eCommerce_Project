<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes============= Name: Mushahedur Rahman Khan Reg: 0400034664
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/website/product/detail/detail/{id}', [HomeController::class, 'singleProductDetail'])->name('single.product.detail');
Route::get('/blog-single-product', [HomeController::class, 'singleProduct'])->name('singleProduct');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    //For Product Route ....
    Route::get('/add-product',[ProductController::class, 'index'])->name('add.product');
    Route::get('/manage-product',[ProductController::class, 'manage'])->name('manage.product');
    Route::post('/add-product',[ProductController::class, 'create'])->name('create.product');
    Route::get('/product-edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::get('/product-delete/{id}',[ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product-update-status/{id}',[ProductController::class, 'updateProductStatus'])->name('product.update-status');
    Route::post('/product-update/{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('/product-detail/{id}',[ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product-trash',[ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product-undo/{id}',[ProductController::class, 'undo'])->name('product.undo');
    Route::get('/force-delete/{id}',[ProductController::class, 'forceDelete'])->name('force.delete');

    //For Customer Route ....

    Route::resource('customer',CustomerController::class);
    
    Route::get('/customer-trash',[CustomerController::class, 'trash'])->name('customer.trash');
    Route::get('/customer-undo/{id}',[CustomerController::class, 'undo'])->name('customer.undo');
    Route::get('/customer-force-delete/{id}',[CustomerController::class, 'forceDelete'])->name('customer.forceDelete');



    //For User Route ....
    Route::get('/add-user',[UserController::class, 'addUser'])->name('add.user');
    Route::get('/manage-user',[UserController::class, 'manage'])->name('user.manage');
    Route::post('/add-user',[UserController::class, 'createUser'])->name('create.user');

});
