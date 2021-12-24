<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\BincangController;
use App\Http\Controllers\EditprofilController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\KritikController;
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
    // $user = auth()->user()->id;
    // dd($user);
    return view('beranda.index');
})->name('dashboard');

Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/bidang', [TentangController::class, 'bidang']);
Route::get('/kampungkeren', [TentangController::class, 'kampungkeren']);
Route::get('/pokmas', [TentangController::class, 'pokmas']);
Route::get('/grafik', [TentangController::class, 'grafik']);
Route::get('/peta', [TentangController::class, 'peta']);
Route::resource('informasi', InformasiController::class);
Route::resource('media', MediaController::class);
Route::resource('kritik', KritikController::class);

//login & profil
Route::get('/loginuser', [AuthController::class, 'loginuser'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post('/postregist', [AuthController::class, 'postregist']);
Route::resource('profil', EditprofilController::class);

Route::group(['middleware' => 'auth'], function(){ //agar tidak dapat tampil menggunakan linknya
    Route::get('/profil/{id}/edit', [ProfilController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

//berlangganan
Route::get('beranda.index', [NewsletterController::class, 'create']);
Route::post('beranda.index', [NewsletterController::class, 'store']);

//artikel
Route::resource('artikel', artikelController::class);
//Route::post('add_prosess', 'artikelController@add_process');
Route::get('artikel', [artikelController::class,'ShareWidget']);

//kritik saran
Route::get('kritik.index', [App\Http\Controllers\KritikController::class, 'kritik'])->name('kritik');
Route::post('kritik-saran', [App\Http\Controllers\KritikController::class, 'storeContactForm'])->name('contact-form.store');
