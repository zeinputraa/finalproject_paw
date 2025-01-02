<?php

namespace App\Models;
use App\Models\Pasien;
use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'nama_lengkap',
        'umur',
        'bidang_keahlian',
        'lokasi_praktik',
        'riwayat',
    ];

    public function pasiens()
    {
        return $this->hasMany(Pasien::class);
    }
}
