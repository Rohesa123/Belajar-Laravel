<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelSiswa;

class TabelSiswaController extends Controller
{
    //
    public function index() {
        $post = TabelSiswa::all();
        return view('pages3.TabelSiswa' , compact('post'));
    }
}
