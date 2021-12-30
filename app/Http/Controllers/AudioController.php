<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AudioController extends Controller
{
    public function index()
    {
        // $audios = Audio::all();
        $audios = DB::table('audios')->get();
        return view('video.index',['audios'=>$audios]);
    }
}
