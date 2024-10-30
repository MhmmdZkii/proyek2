<?php

namespace App\Http\Controllers;

use App\Models\Kamar; 
use Illuminate\Http\Request;

class KamarController extends Controller
{
    // Menampilkan semua kamar
    public function index() {
        $kamars = Kamar::all();
        if (auth()->user()->role === 'admin') {
            return view('admin.dashboard', compact('kamars'));
        } else if (auth()->user()->role === 'penyewa') {
            return view('penyewa.dashboard', compact('kamars'));
        }
    }

    public function show($id) {
        $kamar = Kamar::find($id);
        return view('kamar.show', compact('kamar'));
    }

    public function payment($id) {
        $kamar = Kamar::find($id);
        // Logika pembayaran di sini
        return view('payment.create', compact('kamar'));
    }

    // Metode untuk mengontrol lampu
    public function controlLamp($id)
    {
        // Logika untuk mengontrol lampu
    }
}
