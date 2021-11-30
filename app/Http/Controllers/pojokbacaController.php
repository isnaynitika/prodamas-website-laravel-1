<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pojokbacaController extends Controller
{
    public function index(){
        return view('pojokbaca.index');
    }
}
