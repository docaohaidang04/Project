<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikedController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductdetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\apiProductController;

/* use App\Http\Controllers\Auth; */


/* Route::get('/', function () {
    return view('');
}); */

//user
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/productdetail/{id}', [ProductdetailController::class, 'productdetail'])->name('productdetail');
Route::get('/category/{id}', [ProductController::class, 'showProductsByCategory'])->name('category.products');
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/inf', [UserController::class, 'index'])->name('info');
Route::put('/info', [UserController::class, 'update'])->name('user.info');
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/liked', [LikedController::class, 'index'])->name('liked');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addProduct'])->name('cart.add');
Route::post('/cart/addcart', [CartController::class, 'addProductCart'])->name('cart.addcart');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/deal', [CartController::class, 'deal'])->name('deal');
Route::post('/cart/infocus', [CartController::class, 'infocus'])->name('infocus');
Route::get('/history', [CartController::class, 'orderhistory'])->name('history');
Route::get('/history_detail/{id}', [CartController::class, 'history_detail'])->name('history_detail');
/* Route::get('/register', [LoginResController::class, 'Register'])->name('register');
Route::get('/reset', [LoginResController::class, 'Reset'])->name('reset'); */

//show
/* Route::get('/bestsellers', [HomeController::class, 'showBestsellers'])->name('bestsellers');
    Route::get('/categories', [HeaderController::class, 'show'])->name('categories'); */



//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/user', [AdminController::class, 'user'])->name('user');
Route::get('/productad', [AdminController::class, 'productad'])->name('productad');
Route::delete('/products/{id}', [AdminController::class, 'destroy'])->name('products.destroy');
Route::get('products/create', [AdminController::class, 'create'])->name('products.create');
Route::post('products', [AdminController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [AdminController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [AdminController::class, 'update'])->name('products.update');
Route::get('/searchad', [AdminController::class, 'searchad'])->name('searchad');
Route::get('/dealad', [AdminController::class, 'dealad'])->name('dealad');
Route::get('/history_detail_ad/{id}', [AdminController::class, 'history_detail_ad'])->name('history_detail_ad');
Route::patch('/orderadmin/{id}/status', [AdminController::class, 'updateStatus'])->name('update_order_status');
Route::get('/categoryad', [AdminController::class, 'categoryad'])->name('categoryad');
Route::get('/categoryad/{id}', [AdminController::class, 'showProductsByCategoryad'])->name('admin.categoryad');
Route::delete('/categoryad/{id}', [AdminController::class, 'destroycate'])->name('categories.destroy');
Route::get('categoryad/create/{id}', [AdminController::class, 'createcate'])->name('categoryad.create');
Route::post('/categoryad', [AdminController::class, 'storecate'])->name('categoryad.store');
Route::get('/categoryad/{id}/edit', [AdminController::class, 'editcate'])->name('category.edit');
Route::put('/categoryad/{id}', [AdminController::class, 'updatecate'])->name('category.update');
Route::get('/user/{id}/edit', [AdminController::class, 'editUser'])->name('user.edit');
Route::put('/user/{id}', [AdminController::class, 'updateUser'])->name('userad.update');
Route::get('/users/lock/{id}', [AdminController::class, 'lockUser'])->name('lockUser');
Route::get('/users/unlock/{id}', [AdminController::class, 'unlockUser'])->name('unlockUser');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//api
Route::get('api/products', [apiProductController::class, 'index']);
Route::get('api/products_lasted', [apiProductController::class, 'products_lasted']);
Route::get('api/products_bestseller', [apiProductController::class, 'products_bestseller']);





Auth::routes();
