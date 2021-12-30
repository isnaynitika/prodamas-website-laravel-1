<?php

namespace App\Http\Controllers;
use App\Models\Audio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AudioController extends Controller
{
    public function index(){
        // $audios = Audio::all();
        $audios = DB::table('audios')->get();
        return view('audio.index',['audios'=>$audios]);
    }
}
