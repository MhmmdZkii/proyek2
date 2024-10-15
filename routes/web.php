<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

// Dashboard rute dengan role
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'admin') {
            return view('admin.dashboard');
        } elseif (auth()->user()->role === 'mitra') {
            return view('mitra.dashboard');
        } else {
            return view('penyewa.dashboard');
        }
    })->name('dashboard');
    
    // Rute untuk manajemen kamar
    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
    Route::get('/kamar/{id}', [KamarController::class, 'show'])->name('kamar.show');
    Route::get('/payment/{id}', [KamarController::class, 'payment'])->name('payment');
    Route::post('/lamp/{id}/on', [KamarController::class, 'controlLamp'])->name('lamp.control');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Role-based specific routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::get('/mitra', function () {
        return view('mitra.dashboard');
    })->name('mitra.dashboard');
});

Route::middleware(['auth', 'role:penyewa'])->group(function () {
    Route::get('/penyewa', function () {
        return view('penyewa.dashboard');
    })->name('penyewa.dashboard');
});

require __DIR__.'/auth.php';
