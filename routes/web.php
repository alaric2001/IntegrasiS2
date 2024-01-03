<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConveyorController;
use App\Http\Controllers\UltrasonicController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\OperatorController;

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
    return view('home');
});
Route::get('/equipment', function () {
    return view('equipment/dashboard');
});
Route::get('/detail', function () {
    return view('equipment/detail');
});

Route::resource('conveyors', ConveyorController::class);
Route::resource('ultrasonics', UltrasonicController::class);
Route::resource('activities', ActivityController::class);
Route::resource('operators', OperatorController::class);
