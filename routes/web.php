<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [ProductController::class, 'dashboard']);
Route::get('transaction', [ProductController::class, 'allTransaction']);
Route::get('product', [ProductController::class, 'allProduct']);
Route::get('add-product', [ProductController::class, 'addProduct']);
Route::post('productAdd', [ProductController::class, 'productAdd']);
Route::get('sell-product/{id}', [ProductController::class, 'sellProduct']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
Route::post('productUpdate/{id}', [ProductController::class, 'productUpdate']);
Route::get('remove-product/{id}', [ProductController::class, 'deleteProduct']);
Route::post('productSell/{id}', [ProductController::class, 'productSell']);
