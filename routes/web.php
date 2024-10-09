<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerIndexController;

Route::get('/', static function () {
    return view('customer.index');
});
Route::group([
    'prefix' => 'customer'
], static function () {
    Route::get('/index', [CustomerIndexController::class, 'show_index'])->name('customer.index');
    Route::get('/cart', [CustomerIndexController::class, 'show_cart'])->name('customer.cart');
    Route::get('/checkout', [CustomerIndexController::class, 'show_checkout'])->name('customer.checkout');
    Route::get('/productDetail', [CustomerIndexController::class, 'show_productDetail'])->name('customer.productDetail');
    Route::get('/shop', [CustomerIndexController::class, 'show_shop'])->name('customer.shop');
    Route::get('/about', [CustomerIndexController::class, 'show_about'])->name('customer.about');
    Route::get('/contact', [CustomerIndexController::class, 'show_contact'])->name('customer.contact');
});
