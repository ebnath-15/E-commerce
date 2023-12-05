<?php


use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\OrderDetailsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\OrderController as BackendOrderController;

use App\Http\Controllers\Backend\WishlistController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\OrderController;


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
//all website route:
Route::get('/',[FrontendHomeController::class,'home'])->name('frontend.home');
Route::get('/search',[FrontendHomeController::class,'search'])->name('product.search');


//Customer
//Registration
Route::get('/registration', [CustomerController::class,'registration'])->name('registration');
Route::post('/registration/store',[CustomerController::class,'store'])->name('registration.store');
Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');

//product-view

Route::get('/single-product/{id}',[FrontendProductController::class,'productView'])->name('product.view');
//login & logout
Route::get('/customer/login-form',[CustomerController::class,'loginForm'])->name('customer.login');
Route::post('/customer/store',[CustomerController::class,'loginStore'])->name('customer.store');

//cart
Route::get('/cart-view', [CartController::class, 'cartView'])->name('cart.view');
Route::get('/add-to-cart/{id}',[CartController::class,'AddToCart'])->name('add.cart');
Route::get('/cart-remove/{id}',[CartController::class,'remove'])->name('remove.cart');

   
Route::group(['middleware'=>'auth'],function(){
   Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');
   Route::get('/profile-view',[CustomerController::class,'profileView'])->name('profile');

//Order
Route::post('/order-place}',[OrderController::class,'orderPlace'])->name('order.place');
Route::get('/order-cancel/{product_id}',[OrderController::class,'cancel'])->name('order.cancel');
Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');

});




//all admin panel route:
Route::group(['prefix'=>'admin'],function(){
Route::get('/login',[UserController::class, 'loginForm'])->name('admin.login');
Route::post('loginForm-post/',[UserController::class,'post'])->name('loginForm.post');
Route::group(['middleware' => 'auth'], function () {

   Route::group(['middleware'=>'CheckAdmin'],function(){

//Root
Route::get('/',[HomeController::class, 'home'])->name('dashboard');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

//Role
Route::get('/role/list',[RoleController::class,'list'])->name('role.list');
Route::get('/role/form',[RoleController::class,'Createform'])->name('role.form');
Route::post('/role/store',[RoleController::class,'store'])->name('role.store');
Route::get('/role-edit/{id}',[RoleController::class,'edit'])->name('role.edit');
Route::get('/role-delete/{id}',[RoleController::class,'delete'])->name('role.delete');
Route::put('/role-update/{id}',[RoleController::class,'update'])->name('role.update');


//user
Route::get('/user-list',[UserController::class,'list'])->name('user.list');
Route::get('/user-form',[UserController::class,'createForm'])->name('user.form');
Route::post('/user-store',[UserController::class,'store'])->name('user.store');
Route::get('/user-edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::put('/user-update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/user-delete/{id}',[UserController::class,'delete'])->name('user.delete');


//Category
Route::get('/category',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/category-view/{id}',[CategoryController::class,'view'])->name('category.view');

//Product
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product-add',[ProductController::class,'add'])->name('product.add');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');
Route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::get('/product-delete/{id}',[ProductController::class,'delete'])->name('product.delete');
//Route::get('/product-view/{id}',[ProductController::class,'view'])->name('product.view');
Route::put('/product-update/{id}',[ProductController::class,'delete'])->name('product.update');                                                     


//Brand
Route::get('/brand/list',[BrandController::class,'list'])->name('brand.list');
Route::get('/brand-create',[BrandController::class,'create'])->name('brand.create');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
Route::get('/brand-edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
Route::put('/brand-update/{id}',[BrandController::class,'update'])->name('brand.update');
Route::get('/brand-delete/{id}',[BrandController::class,'delete'])->name('brand.delete');


//order
Route::get('/order-list',[BackendOrderController::class,'list'])->name('order.list');


//OderDetails

Route::get('/order-details',[OrderDetailsController::class,'details'])->name('order.details'); 

//Payment
Route::get('/payment',[PaymentController::class,'list'])->name('payment.list');
Route::get('/payment-create',[PaymentController::class,'create'])->name('payment.create');
Route::post('/payment-store',[PaymentController::class,'store'])->name('payment.store');

//Review
Route::get('/reviews',[ReviewController::class,'list'])->name('review.list');

//Wishlist
Route::get('/wishlist',[WishlistController::class,'list'])->name('wish.list');

});

});
});







