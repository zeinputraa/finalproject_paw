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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->integer('umur');
            $table->string('no_pasien')->unique();
            $table->foreignId('dokter_id')->constrained('dokters');
            $table->enum('jenis_kelamin', ['male', 'female']);
            $table->string('email')->nullable();
            $table->string('nomor_ponsel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
