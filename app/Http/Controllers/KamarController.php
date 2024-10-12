<?php

namespace App\Http\Controllers;

use App\Models\Kamar; // Pastikan model Kamar diimport
use Illuminate\Http\Request;

class KamarController extends Controller
{
    // Menampilkan semua kamar
    public function index()
    {
        $kamars = Kamar::all(); // Ambil semua kamar
        return view('admin.dashboard', compact('kamars'));    }

    // Menampilkan kamar berdasarkan ID
    public function show($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar_detail', compact('kamar'));
    }

    // Metode untuk pembayaran
    public function payment($id)
    {
        // Logika pembayaran
    }

    
}

