<?php

namespace App\Models;
use App\Models\Pasien;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    // Relasi dengan Jadwal
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'dokter_id');
    }
}
