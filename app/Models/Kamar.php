<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars'; // Pastikan nama tabel sesuai
    protected $fillable = ['no_kamar', 'deskripsi', 'lokasi', 'harga', 'foto', 'fasilitas', 'rating', 'status'];
}
