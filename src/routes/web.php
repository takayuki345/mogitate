<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/products');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/search', [ProductController::class, 'search']);

Route::get('/products/register', [ProductController::class, 'register']);

Route::post('/products/register', [ProductController::class, 'store']);

Route::get('/products/{productId}', [ProductController::class, 'edit']);

Route::post('/products/{productId}/update', [ProductController::class, 'update']);