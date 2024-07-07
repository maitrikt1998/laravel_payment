<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products',[ProductController::class,'productlist'])->name('product.list');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
