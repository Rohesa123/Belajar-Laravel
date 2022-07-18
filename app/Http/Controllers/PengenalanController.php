<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    //
    public function pengenalan() {
        $nama = "Rohesa Sidiq Permana";
        $umur = "17";

        return view("pages1.pengenalan", compact('nama','umur'));
    }

    public function intro($nama,$alamat,$umur) {
        return view("pages1.intro", compact("nama","alamat","umur"));
    }

    public function siswa() {
        $a = [
            array('id' => 1,'nama' => "Rohesa", 'umur' => 17, 'kelas' => "XII RPL 3", 'mapel' => ["B. Indonesia","B. Sunda"]),
            array('id' => 2,'nama' => "Surya", 'umur' => 17, 'kelas' => "XII RPL 3", 'mapel' => ["B. Inggris","PENJAS"] ),
            array('id' => 3,'nama' => "Virgi", 'umur' => 17, 'kelas' => "XII RPL 3", 'mapel' => ["MTK","SIMDIG"]),
            array('id' => 4,'nama' => "Wildan", 'umur' => 17, 'kelas' => "XII RPL 3", 'mapel' => ["Fisika","PKWU"]),
            array('id' => 5,'nama' => "Risnadia", 'umur' => 16, 'kelas' => "XII RPL 3", 'mapel' => ["PAI","AL-QUR`AN"])
        ];

        // dd($a);

        return view("pages1.siswa", ["data_siswa" => $a]);
    }
}
