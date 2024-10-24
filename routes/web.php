<?php

use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatController;
use App\Models\DbRealtime;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
    Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');

    Route::post('/api/sensor', [MonitoringController::class, 'index'])->name('monitoring.index');
});

require __DIR__ . '/auth.php';
