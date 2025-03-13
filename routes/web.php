<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;
Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);
//Marketplace
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::post('/cart/add/{id}', [ShopController::class, 'addToCart'])->name('cart.add');

//Dashboard user
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
