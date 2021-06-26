<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KendaraanKeluar;

class KendaraanMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'no_rangka',
        'no_mesin',
        'type',
        'jenis',
        'warna',
        'tahun_pembuatan',
        'tanggal_masuk',
    ];
    public function KendaraanKeluar()
    {
        return $this->hasMany(KendaraanKeluar::class, 'id');
    }
}
