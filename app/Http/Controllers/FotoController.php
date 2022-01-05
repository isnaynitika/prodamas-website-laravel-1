<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotoController extends Controller
{
    public function index()
    {
        $fotos = DB::table('fotos')->get();
        return view('foto.index', ['fotos'=>$fotos]);
    }}
