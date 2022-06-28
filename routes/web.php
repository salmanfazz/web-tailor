<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KonsumenHomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\PenjahitHomeController;
use App\Http\Controllers\PembayaranController;
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
    Route::get('konsumen/service', [PesananController::class,'service']);
    Route::post('konsumen/serviceAdd', [PesananController::class,'serviceAdd']);
    Route::get('konsumen/history', [DetailPesananController::class,'history']);
    Route::get('konsumen/historyDetail/{id_pesanans}', [DetailPesananController::class,'historyDetail']);
    Route::get('konsumen/payment', [PembayaranController::class,'payment']);
    Route::get('konsumen/paymentDetail/{id_pesanans}', [PembayaranController::class,'paymentDetail']);
    Route::post('konsumen/paymentSet/{id_pesanans}', [PembayaranController::class,'paymentSet']);
});

Route::middleware([PenjahitMiddleware::class])->group(function () {
	Route::get('penjahit/home', [PenjahitHomeController::class,'indexPenjahit']);
});
