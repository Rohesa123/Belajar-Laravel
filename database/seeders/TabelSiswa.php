<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TabelSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['nama' => 'Rohesa'],
            ['nama' => 'Wildan'],
            ['nama' => 'Surya'],
            ['nama' => 'Virgi']
        ];

        DB::table('tabel_siswas')->insert($sampel);
    }
}
