<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EqDashboardController;
use App\Http\Controllers\ConveyorController;
use App\Http\Controllers\UltrasonicController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\BatchController;

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
// Route::get('/eqdashboard', function () {
//     return view('equipment/dashboard');
// });
Route::get('/eq_conv_detail', function () {
    return view('equipment/detail_conv');
});
// Route::get('/conveyor', function () {
//     return view('equipment/conveyor');
// });
// Route::get('/ultrasonic', function () {
//     return view('equipment/ultrasonic');
// });
// Route::get('/acdashboard', function () {
//     return view('activity/dashboard');
// });
Route::get('/acdetail', function () {
    return view('activity/detail');
});
// Route::get('/inspecdashboard', function () {
//     return view('inspection/dashboard');
// });
Route::get('/inspecdetail', function () {
    return view('inspection/detail');
});
// Route::get('/bcdashboard', function () {
//     return view('inspection/batch/dashboard');
// });
Route::get('/bcdetail', function () {
    return view('inspection/batch/detail');
});
Route::get('/prdashboard', function () {
    return view('inspection/product/dashboard');
});
Route::get('/prdetail', function () {
    return view('inspection/product/detail');
});
// Route::resource('conveyors', ConveyorController::class);
Route::resource('ultrasonics', UltrasonicController::class);
// Route::resource('activities', ActivityController::class);

Route::get('/eqdashboard', [EqDashboardController::class, 'index']);

Route::get('/conveyor', [ConveyorController::class, 'index']);
Route::get('/eq_conv_detail/{id}', [ConveyorController::class, 'show']);

Route::get('/ultrasonic', [UltrasonicController::class, 'index']);
Route::get('/eq_ultra_detail/{id}', [UltrasonicController::class, 'show']);

Route::get('/acdashboard', [ActivityController::class, 'index']);
Route::get('/acdetail/{id}', [ActivityController::class, 'show']);

Route::get('/inspecdashboard', [InspectionController::class, 'index']);

Route::get('/bcdashboard', [BatchController::class, 'index']);
Route::get('/bcdetail/{id}', [BatchController::class, 'show']);

Route::resource('operators', OperatorController::class);
