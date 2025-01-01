<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';

    protected $fillable = [
        'nama_lengkap',
        'umur',
        'no_pasien',
        'paket_konsultasi',
        'jenis_kelamin',
        'email',
        'nomor_ponsel',
    ];
}
