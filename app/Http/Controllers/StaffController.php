<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    //
    public function index() {
        $post = Staff::all();
        return view('pages2.staff' ,compact('post'));
    }
}
