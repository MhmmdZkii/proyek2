<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_kamar')->unique();
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->decimal('harga', 10, 2);
            $table->string('foto')->nullable();
            $table->string('fasilitas')->nullable();
            $table->double('rating', 8, 2)->default(0);
            $table->enum('status', ['tersedia', 'terpesan', 'dalam perbaikan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
