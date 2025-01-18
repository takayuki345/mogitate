<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/search', [ProductController::class, 'search']);

Route::get('/products/register', [ProductController::class, 'register']);

Route::post('/products/register', [ProductController::class, 'store']);

Route::get('/products/{productId}', [ProductController::class, 'edit']);

Route::post('/products/{productId}/update', [ProductController::class, 'update']);