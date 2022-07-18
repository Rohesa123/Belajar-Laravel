<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Branch;
use App\Models\StaffBranch;

class StaffBranch1Controller extends Controller
{
    //
    public function index() {
        $post1 = StaffBranch::all();
        $post2 = Staff::all();
        $post3 = Branch::all();
        return view('pages2.StaffBranch1',compact('post1','post2','post3'));
    }  
}
