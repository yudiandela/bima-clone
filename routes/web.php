<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::prefix('penelitian')->group(function () {
        Route::view('usulan-baru', 'penelitian.usulan-baru')->name('penelitian.usulan-baru');
        Route::view('perbaikan-usulan', 'penelitian.perbaikan-usulan')->name('penelitian.perbaikan-usulan');
        Route::view('laporan-kemajuan', 'penelitian.laporan-kemajuan')->name('penelitian.laporan-kemajuan');
        Route::view('laporan-akhir', 'penelitian.laporan-akhir')->name('penelitian.laporan-akhir');
        Route::view('catatan-harian', 'penelitian.catatan-harian')->name('penelitian.catatan-harian');

        Route::view('{id}', 'penelitian.edit')->name('penelitian.edit');
    });

    Route::view('profile', 'profile')->name('profile');
});

require __DIR__ . '/auth.php';
