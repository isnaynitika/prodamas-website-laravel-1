<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendidikanController extends Controller
{
    public function index(){
        return view('pendidikan.index');
    }
}
