<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KamarController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menampilkan dashboard berdasarkan role
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user(); // Ambil pengguna yang sedang login
        // Redirect sesuai role
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'mitra') {
            return redirect()->route('mitra.dashboard');
        } elseif ($user->role === 'penyewa') {
            return redirect()->route('penyewa.dashboard');
        }
        // Redirect jika role tidak dikenali
        return redirect('/');
    })->name('dashboard');

    // Rute admin dashboard, menampilkan semua kamar
    Route::get('/admin/dashboard', [KamarController::class, 'index'])->name('admin.dashboard');

    // Rute penyewa dashboard, menampilkan semua kamar
    Route::get('/penyewa/dashboard', [KamarController::class, 'index'])->name('penyewa.dashboard');

    // Rute untuk melihat detail kamar berdasarkan ID
    Route::get('/kamar/{id}', [KamarController::class, 'show'])->name('kamar.show');

    // Rute untuk halaman pembayaran berdasarkan ID kamar
    Route::get('/payment/{id}', [KamarController::class, 'payment'])->name('payment');

    // Manajemen profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rute auth
require __DIR__.'/auth.php';
