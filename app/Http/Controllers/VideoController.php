<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos')->get();
        return view('video.index', ['video'=>$videos]);
    }
}
