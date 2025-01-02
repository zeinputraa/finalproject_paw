<?php

namespace App\Models;
use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'umur',
        'nama_dokter',
        'lokasi_praktik',
        'waktu_konsultasi',
        'riwayat',
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id'); // Jika ada kolom dokter_id
    }
}
