<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, "home"] );

Route::get('/joke', [MainController::class, "joke"] );

Route::get('/tap', [MainController::class, "tap"] );

Route::post('/tap/check', [MainController::class, "tap_check"] );
//
//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return "ID. ". $id. ". Name: ". $name;
//});
