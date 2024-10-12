<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CustomerIndexController;
use App\Http\Controllers\CustomerOrderController;

Route::get('/', static function () {
    return view('admin.layouts.main');
});
Route::group([
    'prefix' => 'auth'
], static function () {
    Route::get('/login', [UserController::class, 'show_login'])->name('auth.login');
    Route::get('/register', [UserController::class, 'show_register'])->name('auth.register');
    Route::post('/register', [UserController::class, 'register'])->name('auth.post_register');

    Route::post('/login', [UserController::class, 'post_login'])->name('auth.post_login');
    Route::get('/logout', [UserController::class, 'post_logout'])->name('auth.logout');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], static function () {
    Route::group([
        'prefix' => 'order'
    ], static function () {
        Route::get('/customer', [AdminOrderController::class, 'show_customer'])->name('admin.order.customer');
        Route::get('/update/{model}', [AdminOrderController::class, 'show_update'])->name('admin.order.update');
        Route::get('/index', [AdminOrderController::class, 'show_index'])->name('admin.order.index');

        Route::post('/update/{model}', [AdminOrderController::class, 'update'])->name('admin.order.edit');
    });

    Route::group([
        'prefix' => 'product'
    ], static function () {
        Route::get('/create', [AdminProductController::class, 'show_create'])->name('admin.product.create');
        Route::get('/update/{model}', [AdminProductController::class, 'show_update'])->name('admin.product.update');
        Route::get('/index', [AdminProductController::class, 'show_index'])->name('admin.product.index');

        Route::get('/delete/{model}', [AdminProductController::class, 'delete'])->name('admin.product.delete');
        Route::post('/store', [AdminProductController::class, 'store'])->name('admin.product.store');
        Route::post('/update/{model}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
    });
});

Route::group([
    'prefix' => 'customer'
], static function () {
    Route::get('/index', [CustomerIndexController::class, 'show_index'])->name('customer.index');

    Route::get('/product-detail/{model}', [CustomerIndexController::class, 'show_productDetail'])->name('customer.productDetail');
    Route::get('/shop', [CustomerIndexController::class, 'show_shop'])->name('customer.shop');
    Route::get('/about', [CustomerIndexController::class, 'show_about'])->name('customer.about');
    Route::get('/contact', [CustomerIndexController::class, 'show_contact'])->name('customer.contact');

    Route::group([
        'prefix' => 'order',
        'middleware' => 'auth'
    ], static function () {
        Route::get('/cart', [CustomerOrderController::class, 'show_cart'])->name('customer.cart');
        Route::get('/checkout', [CustomerOrderController::class, 'show_checkout'])->name('customer.checkout');
        Route::get('/index', [CustomerOrderController::class, 'show_order'])->name('customer.order');

        Route::post('/add-to-cart', [CustomerOrderController::class, 'addToCart'])->name('customer.addToCart');
        Route::get('/remove-cart-item/{model}', [CustomerOrderController::class, 'removeCartItem'])->name('customer.removeCartItem');
        Route::post('/checkout', [CustomerOrderController::class, 'post_checkout'])->name('customer.post.checkout');
    });
});
