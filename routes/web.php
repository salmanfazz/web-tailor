<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KonsumenHomeController;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\KonsumentMiddleware;
use App\Http\Middleware\PenjahitMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('logout', 'LoginController@logout');
Route::middleware([LoginMiddleware::class])->group(function () {
	Route::get('login', [LoginController::class,'viewLogin']);
    Route::get('register', [LoginController::class,'viewRegister']);
	Route::post('loginPost', [LoginController::class,'loginPost']);
    Route::post('register', [LoginController::class,'register']);
});

Route::middleware([KonsumentMiddleware::class])->group(function () {
	Route::get('konsumen/home', [KonsumenHomeController::class,'indexKonsumen']);
    Route::get('konsumen/service', [KonsumenHomeController::class,'service']);
    Route::post('konsumen/serviceAdd', [KonsumenHomeController::class,'serviceAdd']);
});

Route::middleware([PenjahitMiddleware::class])->group(function () {
	Route::get('penjahit/home', [LoginController::class,'indexPenjahit']);
});
