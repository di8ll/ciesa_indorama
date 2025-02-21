<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TpbBc25Controller;
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
    Route::get('/dokumen_baru', [TpbBc25Controller::class, 'index'])->name('dokumen_baru');
    Route::get('/dokumen/create', [TpbBc25Controller::class, 'create'])->name('dokumen.create');
    Route::post('/dokumen/store', [TpbBc25Controller::class, 'store'])->name('dokumen.store');

    Route::get('/data_dokumen', [DokumenController::class, 'index'])->name('tampil_dokumenpabean');  // Get semua dokumen
    Route::post('/kirim_dokumen', [DokumenController::class, 'store'])->name('kirim_dokumenpabean'); // Simpan dokumen baru
    Route::put('/dokumen_update/{id}', [DokumenController::class, 'update']); // Update dokumen
    Route::delete('/dokumen/{id}', [DokumenController::class, 'destroy']); // Hapus dokumen


