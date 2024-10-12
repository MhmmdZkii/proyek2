<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;

// Auth middleware
Route::middleware(['auth', 'userMiddleware'])->group(function() {
    // Tambahkan rute yang memerlukan autentikasi dan userMiddleware jika ada.
});

// Homepage
Route::get('/index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
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


    Route::get('/dashboard', [KamarController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

    
    //route kamar
    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
    

    // Melihat katalog dari data kamar
    Route::get('/kamar/{id}', [KamarController::class, 'show'])->name('kamar.show');
    Route::get('/payment/{id}', [KamarController::class, 'payment'])->name('payment');
    
    //lampu katalog js
    Route::post('/lamp/{id}/on', [KamarController::class, 'controlLamp'])->name('lamp.control');


    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Role-based routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});

Route::middleware(['auth', 'role:mitra'])->group(function () {
    Route::get('/mitra', function () {
        return view('mitra.dashboard');
    });
});

Route::middleware(['auth', 'role:penyewa'])->group(function () {
    Route::get('/penyewa', function () {
        return view('penyewa.dashboard');
    });
});

require __DIR__.'/auth.php';
