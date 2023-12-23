<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

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

Route::get('/', [TripController::class, 'dashboard']);
Route::get('trip', [TripController::class, 'allTrip']);
Route::get('add-trip', [TripController::class, 'addTrip']);
Route::post('tripAdd', [TripController::class, 'tripAdd']);
