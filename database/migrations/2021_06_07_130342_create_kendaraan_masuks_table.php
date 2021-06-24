<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan_masuks', function (Blueprint $table) {
            $table->id();
            $table->char('no_rangka');
            $table->char('no_mesin');
            $table->String('type');
            $table->String('jenis');
            $table->String('warna');
            $table->String('gambar')->nullable();
            $table->date('tahun_pembuatan');
            $table->date('tanggal_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan_masuks');
    }
}
