<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminJasaController;
use App\Http\Controllers\UserJasaController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/home_admin', function () {
    return view('layouts.mazer-be');
});

Route::get('/', function () {
    return view('home-servis');
})->name('home');

Route::get('/gallery', function () {
    return view('includes.gallery-user');
});

Route::get('/tambah-jasa', function () {
    return view('admin.tambah-jasa');
})->name('tambah');

Route::get('/update-jasa', function () {
    return view('admin.update-jasa');
})->name('update');



Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [AuthLoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthLoginController::class, 'login']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [AuthLoginController::class, 'logout'])->name('logout');
});

Route::get('/jasa', [App\Http\Controllers\UserjasaController::class, 'viewjasa']);
Route::get('/checkout', [App\Http\Controllers\UserjasaController::class, 'checkout'])->name('checkout');
Route::post('/checkout/store', [App\Http\Controllers\UserJasaController::class, 'checkoutStore'])->name('checkout.store');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/home_admin', [VisitorController::class, 'index'])->name('home');  //Login = /Nome
    Route::get('/update-jasa/{id}', [AdminjasaController::class, 'update'])->name('update-jasa');
    Route::delete('/jasa/delete/{id}', [AdminJasaController::class, 'delete'])->name('delete-jasa');
    Route::post('/tambah-jasa', [AdminJasaController::class, 'store']);
    Route::post('/jasa/store', [AdminJasaController::class, 'store'])->name('jasa.store');
    Route::get('/cetak-jasa', [AdminjasaController::class, 'cetakJasa'])->name('cetak-jasa');
    Route::get('/cetak-pemesanan', [AdminjasaController::class, 'cetakPemesanan'])->name('cetak-pemesanan');
    Route::get('/admin.daftar-jasa', [AdminJasaController::class, 'index'])->name('daftar.jasa');
    Route::get('/admin.daftar-pemesanan', [AdminJasaController::class, 'viewPesan'])->name('daftar-pemesanan');
    Route::delete('/pemesanan/delete/{id}',[AdminJasaController::class, 'delete_pemesan'])->name('delete-pemesan');
});
