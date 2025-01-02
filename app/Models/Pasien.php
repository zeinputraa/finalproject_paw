<?php

namespace App\Models;
use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $fillable = [
        'nama_lengkap',
        'umur',
        'no_pasien',
        'paket_konsultasi',
        'jenis_kelamin',
        'email',
        'nomor_ponsel',
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
