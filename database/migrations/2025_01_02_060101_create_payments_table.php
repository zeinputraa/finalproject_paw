<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasiens'); // Assuming 'pasiens' table exists
            $table->foreignId('dokter_id')->constrained('dokters'); // Assuming 'dokters' table exists
            $table->foreignId('jadwal_id')->constrained('jadwals'); // Assuming 'jadwals' table exists
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
