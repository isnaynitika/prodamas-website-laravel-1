<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\BincangController;
use App\Http\Controllers\EditprofilController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\kampungkerenController;
use App\Http\Controllers\pendidikanController;
use App\Http\Controllers\pojokbacaController;
use App\Http\Controllers\umkmController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\artikelController;
//use App\Http\Controllers\SocialShareButtonsController;


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

//login
Route::get('/login', function () {
    return view('login.login');
});

//berlangganan
Route::get('beranda.index', [NewsletterController::class, 'create']);
Route::post('beranda.index', [NewsletterController::class, 'store']);

//artikel
Route::resource('artikel', artikelController::class);
//Route::post('add_prosess', 'artikelController@add_process');
Route::get('artikel', [artikelController::class,'ShareWidget']);