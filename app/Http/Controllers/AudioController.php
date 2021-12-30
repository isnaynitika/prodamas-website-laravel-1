<?php

namespace App\Http\Controllers;
use App\Models\Tulis_cerita;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function index(){
        $audios = Tulis_cerita::all();
        return view('audio.index',['audios'=>$audios]);
    }
}
