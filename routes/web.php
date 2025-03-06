<?php

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);
