<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\StockBarangController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role::admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });
    Route::get('profile', function () {
        return 'halaman profile admin';
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('lab', function () {
        return view('lab.index');
    });
    Route::get('bengkel', function () {
        return view('bengkel.index');
    });
    Route::resource('kategori', KategoriController::class);
    Route::resource('stockbarang', StockBarangController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('barangmasuk', BarangMasukController::class);
    Route::resource('barangkeluar', BarangKeluarController::class);
    Route::resource('pinjambarang', PinjamBarangController::class);

});
