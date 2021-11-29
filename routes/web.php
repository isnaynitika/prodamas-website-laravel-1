<?php

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

/*Route::get('/', function () {
    return view('informasi/informasi');
});

Route::get('/s', function () {
    return view('layout/index');
});*/

//tampilan
Route::get('/', function () {
    return view('beranda.index');
});
Route::resource('bidang', BidangController::class);
Route::resource('bincang', BincangController::class);
Route::resource('informasi', InformasiController::class);
Route::resource('media', MediaController::class);

//sektor
//Route::resource('informasi', InformasiController::class);
Route::resource('umkm', umkmController::class);
Route::resource('pendidikan', pendidikanController::class);
Route::resource('pojokbaca', pojokbacaController::class);
Route::resource('kampungkeren', kampungkerenController::class);

//profil
Route::resource('profil', EditprofilController::class);
Route::get('/profil/{id}/edit', [BarangController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logout']);
