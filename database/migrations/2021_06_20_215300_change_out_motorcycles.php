<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOutMotorcycles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('out_motorcycles', function (Blueprint $table) {
            $table->unsignedBigInteger('masuk_id')->nullable();
            $table->foreign('masuk_id')->references('id')->on('kendaraan_masuks')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('out_motorcycles', function (Blueprint $table) {
            $table->dropForeign(['masuk_id']);
        });
    }
}
