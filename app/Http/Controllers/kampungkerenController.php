<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kampungkerenController extends Controller
{
    public function index(){
        return view('kampungkeren.index');
    }
}
