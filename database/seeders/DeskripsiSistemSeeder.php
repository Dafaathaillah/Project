<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DeskripsiSistemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deskripsi_sistems')->insert(
        	[
        		'isi'=>'Sistem Ini Tujukan Untuk Admin Dealer'
        	]
        );
    }
}
