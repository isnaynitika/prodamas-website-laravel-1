<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudioController extends Controller
{
    public function index()
    {
        $audios = DB::table('audios')->get();
        return view('audio.index',['audios'=>$audios]);
    }
}
