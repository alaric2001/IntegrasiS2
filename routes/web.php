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
Route::get('/eqdashboard', function () {
    return view('equipment/dashboard');
});
Route::get('/eqdetail', function () {
    return view('equipment/detail');
});
Route::get('/conveyor', function () {
    return view('equipment/conveyor');
});
Route::get('/ultrasonic', function () {
    return view('equipment/ultrasonic');
});
// Route::get('/acdashboard', function () {
//     return view('activity/dashboard');
// });
Route::get('/acdetail', function () {
    return view('activity/detail');
});
Route::get('/inspecdashboard', function () {
    return view('inspection/dashboard');
});
Route::get('/inspecdetail', function () {
    return view('inspection/detail');
});
Route::get('/bcdashboard', function () {
    return view('inspection/batch/dashboard');
});
Route::get('/bcdetail', function () {
    return view('inspection/batch/detail');
});
Route::get('/prdashboard', function () {
    return view('inspection/product/dashboard');
});
Route::get('/prdetail', function () {
    return view('inspection/product/detail');
});
Route::resource('conveyors', ConveyorController::class);
Route::resource('ultrasonics', UltrasonicController::class);
// Route::resource('activities', ActivityController::class);
Route::get('/acdashboard', [ActivityController::class, 'index']);
Route::get('/acdetail/{id}', [ActivityController::class, 'show']);


Route::resource('operators', OperatorController::class);
