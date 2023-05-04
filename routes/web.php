<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(App\Http\Controllers\SliderController::class)->group(function () {
    Route::get('/','index');
    Route::get('sliders/create','create');
    Route::post('sliders/create','store');
    Route::get('sliders/{slider}/edit','edit');
    Route::put('sliders/{slider}','update');
    Route::get('sliders/{slider}/delete','destroy');
});