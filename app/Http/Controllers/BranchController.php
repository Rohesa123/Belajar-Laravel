<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    //
    public function index() {
        $post = Branch::all();
        return view('pages2.branch', compact('post'));
    }
}
