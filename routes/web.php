<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TpbBc25Controller;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});


// Rute otentikasi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    // Dashboard/Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Dokumen Pabean (hanya bisa diakses jika sudah login)
    Route::get('/dokumen_baru', [TpbBc25Controller::class, 'index'])->name('dokumen_baru');
    Route::get('/dokumen/create', [TpbBc25Controller::class, 'create'])->name('dokumen.create');
    Route::post('/dokumen/store', [TpbBc25Controller::class, 'store'])->name('dokumen.store');

});
