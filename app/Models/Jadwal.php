<?php

namespace App\Models;
use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }

    protected $fillable = [
        'dokter_id',
        'waktu_konsultasi',
        'lokasi_praktik',
        'riwayat'
    ];
}
