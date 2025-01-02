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
        // Membuat tabel 'pasiens' dengan kolom yang ada
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 255);
            $table->integer('umur');
            $table->bigInteger('no_pasien');  // Menyimpan no_pasien sebagai BIGINT
            $table->string('paket_konsultasi', 50);
            $table->enum('jenis_kelamin', ['male', 'female']);
            $table->string('email', 255)->nullable();
            $table->string('nomor_ponsel', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'pasiens' saat rollback
        Schema::dropIfExists('pasiens');
    }
};
