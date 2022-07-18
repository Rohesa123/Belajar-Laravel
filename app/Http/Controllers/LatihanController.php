<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    //
    public function menu()
    {
        $a = [
            array(
            'menu_n' => ["Beranda", "Berita", "Tentang"],
            'menu_b' => ["Olahraga", "Politik", "Manca Negara"],
            'menu_o' => ["Sepak Bola", "Bulu Tangkis"] 
            ),
        ];

        // dd($a);

        return view("pages1.menu", ["menu" => $a]);
    }

    // Yusuf = id_d = 1
    // Yaris = id_d = 2

    public function nilaiMahasiswa() {
        $a = [
            array('id' => 1,'id_d' => 1,'Nama' => "Muhammad Soleh", 'Nilai' => 78,),
            array('id' => 2,'id_d' => 1,'Nama' => "Jujun Junaedi", 'Nilai' => 85,),
            array('id' => 3,'id_d' => 2,'Nama' => "Alfred McTomminay", 'Nilai' => 67,),
            array('id' => 4,'id_d' => 2,'Nama' => "Bruno Kasmir", 'Nilai' => 90,),
            array('id' => 5,'id_d' => 1,'Nama' => "Mamat Alkatiri", 'Nilai' => 90,),
            array('id' => 6,'id_d' => 2,'Nama' => "Akid Hendra", 'Nilai' => 50,),
            array('id' => 7,'id_d' => 1,'Nama' => "Ubay Holin", 'Nilai' => 87,),
            array('id' => 8,'id_d' => 2,'Nama' => "Dany Irawan", 'Nilai' => 70,),
            array('id' => 9,'id_d' => 1,'Nama' => "Fadillah", 'Nilai' => 95,),
            array('id' => 10,'id_d' => 2,'Nama' => "Chadra Mega Putra", 'Nilai' => 60,),
        ];

        // dd($a); 

        return view("pages1.mahasiswa", ["data" => $a]);
    }

    public function channel() {
        $b = [
            ['nama_channel' => "Net Tv", 
                'acara_1' => ['Ini Talkshow','Senin',"18.00","04/07/2022"],
                'acara_2' => ['Shinbi House','selasa',"14.00","05/07/2022"],
                'acara_3' => ['Dektektif Conan','Rabu',"15.00","05/07/2022"],
            ],
            ['nama_channel' => "TVRI", 
                'acara_1' => ['Wayang','Kamis',"22.00","06/07/2022"],
                'acara_2' => ['Berita','Jum`at',"12.00","07/07/2022"],
                'acara_3' => ['Musik Sunda','Sabtu',"16.00","08/07/2022"],
            ],
            ['nama_channel' => "BEINSPORT", 
                'acara_1' => ['Bulu Tangkis','Minggu',"12.00","09/07/2022"],
                'acara_2' => ['Berita Olahraga','Senin',"14.00","10/07/2022"],
                'acara_3' => ['Night Talk','Selasa',"20.00","11/07/2022"],
            ],
            ['nama_channel' => "Ochannel", 
                'acara_1' => ['I-Music','Rabu',"14.00","12/07/2022"],
                'acara_2' => ['Drakor','Kamis',"17.00","13/07/2022"],
                'acara_3' => ['Cooking Mama','Jum`at',"09.00","14/07/2022"],
            ],
            ['nama_channel' => "Indosiar", 
                'acara_1' => ['Azab','Sabtu',"16.00","15/07/2022"],
                'acara_2' => ['Bola','Minggu',"12.00", "16/07/2022"],
                'acara_3' => ['Azab 2','Senin',"20.00","17/07/2022"],
            ],

        ];

        // dd($b);

        return view("pages1.televisi", ["televisi" => $b]);
    }

    public function belanja() {
        $a = [
            [
                'nama' => "Alfian", 
                'barang' => ['Sepatu', "Baju", "Celana", "Kupluk"],
                'harga' => [250000,100000,150000,100000]
            ],
            [
                'nama' => "Dida",
                'barang' => ['Topi', 'Baju', 'Celana'],
                'harga' => [100000,75000,125000]
            ],
            [
                'nama' => 'Rohesa',
                'barang' => ['Jaket', 'Baju','Sepatu','Sweater','Celana'],
                'harga' => [200000,150000,200000,400000,100000]
            ]
        ];

        
        return view('pages1.belanja', ['belanja' => $a]);
    }
}
