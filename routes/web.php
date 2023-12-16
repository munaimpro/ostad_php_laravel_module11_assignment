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

Route::get('transaction', [ProductController::class, 'allTransaction']);
Route::get('product', [ProductController::class, 'allProduct']);
Route::get('add-product', [ProductController::class, 'addProduct']);
Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
