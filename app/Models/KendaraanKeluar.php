<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\KendaraanKeluar as Authenticatable;
use Illuminate\Notifications\Notifiable;

class KendaraanKeluar extends Model
{
    use HasFactory;
    protected $table='out_motorcycles'; 
    /**
    * The attributes that are mass assignable. *
    * @var array
    */
    protected $fillable = [
        'id',
        'penerima',
        'kontak_penerima',
        'tanggal_keluar',
        'masuk_id',
    ];

    public function KendaraanMasuk(){
        return $this->belongsTo(KendaraanMasuk::class, 'masuk_id');
    }
}
