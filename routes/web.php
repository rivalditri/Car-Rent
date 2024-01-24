<?php

use Doctrine\DBAL\Schema\Index;
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

Route::get('/', [\App\Http\Controllers\frontend\HomePageController::class, 'index']);
Route::get('/service', [\App\Http\Controllers\frontend\ServiceController::class, 'index']);
Route::get('/car', [\App\Http\Controllers\frontend\CarController::class, 'index']);
Route::get('/bookCar/{id}', [\App\Http\Controllers\frontend\CarController::class, 'bookCar']);
