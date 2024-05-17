<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('research-and-development', [HomeController::class,'r_and_d'])->name('r&d');
Route::get('author-videos', [HomeController::class,'auther_video'])->name('video');
Route::get('past-paper', [HomeController::class,'past_paper'])->name('past-paper');

Route::get('shop', [ShopController::class,'shop'])->name('shop');
Route::post('shop-filter', [ShopController::class,'shop_filter'])->name('shop-filter');
Route::get('subject-detail/{id}', [ShopController::class,'subject_detail'])->name('subject-detail');




    // ////////////////////////////////// cAR route  ///////////////.//////////////

    Route::post('cart-add', [CartController::class,'cart_add'])->name('cart-add');
    Route::get('cart', [CartController::class,'cart_view'])->name('cart-view');
    Route::post('cart-delete', [CartController::class,'cart_delete'])->name('cart-delete');
    Route::post('cart-update', [CartController::class,'cart_update'])->name('cart-update');

    Route::get('checkout', [CheckoutController::class,'checkout_page'])->name('checkout');
    Route::post('order-save', [CheckoutController::class,'order_save'])->name('order-save');



// Route::get('/', function () {
//     return view('site/page/home/home');
// });
// Route::get('shop', function () {
//     return view('site/page/shop');
// });
// Route::get('r&d', function () {
//     return view('site/page/r&d');
// });
Route::get('autherVideo', function () {
    return view('site/page/auther_video');
});

Route::get('pastPaper', function () {
    return view('site/page/past_paper');
});
