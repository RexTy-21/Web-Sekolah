<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonSiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Models\Galeri;

// Rute Halaman Publik
Route::get('/', function () { return view('beranda'); });

Route::get('/galeri', function () {
    $galeri = Galeri::orderBy('created_at', 'desc')->get();
    return view('galeri', compact('galeri'));
});

Route::get('/ppdb', [CalonSiswaController::class, 'index']);
Route::post('/ppdb', [CalonSiswaController::class, 'store']);

// Rute Autentikasi Login Admin
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

// Rute Dashboard & Manajemen Admin (DIKUNCI: Harus Login)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::post('/admin/galeri', [AdminController::class, 'storeGaleri']);
    Route::delete('/admin/pendaftar/{id}', [AdminController::class, 'destroyPendaftar']);
    Route::delete('/admin/galeri/{id}', [AdminController::class, 'destroyGaleri']);
});