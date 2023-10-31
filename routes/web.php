0 ` <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;

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
//Root
Route::get('/',[HomeController::class, 'home']);

//Category
Route::get('/category',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::get('/category/delete',[CategoryController::class,'delete'])->name('category.delete');

//Product
Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product-add',[ProductController::class,'add'])->name('product.add');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');

//Brand
Route::get('/brand/list',[BrandController::class,'list'])->name('brand.list');
Route::get('/brand/list/edit',[BrandController::class,'edit'])->name('brand.edit');
Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');

//Customer
Route::get('/customer/list',[CustomerController::class,'list'])->name('customer.list');
Route::get('/customer/form',[CustomerController::class,'form'])->name('customer.form');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');

//Order
Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
Route::get('/order-details',[OrderController::class,'details'])->name('order.details');

//Payment
Route::get('/payment',[PaymentController::class,'list'])->name('payment.list');
Route::get('/payment-create',[PaymentController::class,'create'])->name('payment.create');
Route::post('/payment-store',[PaymentController::class,'store'])->name('payment.store');

//Review
Route::get('/reviews',[ReviewController::class,'list'])->name('review.list');

//Wishlist
Route::get('/wishlist',[WishlistController::class,'list'])->name('wish.list');








