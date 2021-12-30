<?php

namespace App\Http\Controllers;
use App\Models\Audio;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function index(){
        $audios = Audio::all();
        return view('audio.index',$audios->audios);
    }
}
