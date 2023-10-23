<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'home']);
Route::get('/category',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product-add',[ProductController::class,'add'])->name('product.add');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');

Route::get('/brand/list',[BrandController::class,'list'])->name('brand.list');
Route::get('/brand/list/edit',[BrandController::class,'edit'])->name('brand.edit');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');

Route::get('/customer/list',[CustomerController::class,'list'])->name('customer.list');
Route::get('/customer/form',[CustomerController::class,'form'])->name('customer.form');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');

Route::get('/order/list',[orderController::class,'list'])->name('order.list');
Route::get('/order-details',[OrderController::class,'details'])->name('order.details');

Route::get('/payment',[PaymentController::class,'list'])->name('payment.list');
Route::get('/payment-create',[PaymentController::class,'create'])->name('payment.create');
Route::post('/payment-store',[PaymentController::class,'store'])->name('payment.store');








