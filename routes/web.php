<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;

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
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('lay.index');
});

Route::get('login', [LoginController::class,'index'])->name("login");
Route::post('login', [LoginController::class,'authenticate']);

Route::resource('beranda', LayController::class);  
Route::resource('kasir', KasirController::class);
Route::resource('barang', BarangController::class);
Route::resource('transaksi', TransaksiController::class);
