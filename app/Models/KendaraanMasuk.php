<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_rangka',
        'no_mesin',
        'type',
        'jenis',
        'warna',
        'tahun_pembuatan',
        'tanggal_masuk',
    ];
}
