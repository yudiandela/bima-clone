<?php

use App\Http\Controllers\PenelitianController;
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
        Route::get('{status}', PenelitianController::class)->name('penelitian.status');
    });

    Route::view('profile', 'profile')->name('profile');
});

require __DIR__ . '/auth.php';
