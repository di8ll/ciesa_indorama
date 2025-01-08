<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokumenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->get('/home', function () {
    return view('home');
});


    // Rute otentikasi, jika menggunakan sistem otentikasi default
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Home
    Route::get('/home', [HomeController::class, 'index'])->name('home');


    //Dokumen Pabean
    Route::get('/dokumen-baru', [DokumenController::class, 'index'])->name('dokumen-baru.index');
    Route::post('/dokumen-baru', [DokumenController::class, 'store'])->name('dokumen-baru.store');
    Route::get('/dokumen_pabean/data', [DokumenController::class, 'index']);
