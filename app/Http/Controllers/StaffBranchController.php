<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;

class StaffBranchController extends Controller
{
    //
    public function index() {
        $post = StaffBranch::all();
        return view('pages2.StaffBranch',compact('post'));
    }
}
