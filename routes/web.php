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
Route::get('trip', [ProductController::class, 'allTrip']);
Route::get('add-trip', [ProductController::class, 'addTrip']);
Route::post('tripAdd', [ProductController::class, 'tripAdd']);
