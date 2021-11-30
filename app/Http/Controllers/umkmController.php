<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class umkmController extends Controller
{
    public function index(){
        return view('umkm.index');
    }
}
