<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TulisCeritaController extends Controller
{
    public function index(){
        return view('tulisCerita.index');
    }
}
