<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;
use File;

class VideoController extends Controller
{
    public function create()
    {
        return view('admin.video.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'video_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            //'konten' => 'mimes:video/mp4',
            'caption' => 'required'
        ]);

        //$konten = $request->konten;
        //$new_video_konten = time() . ' - ' . $konten->getClientOriginalName();

        $video_sampul = $request->video_sampul;
        $new_video_sampul = time() . ' - ' . $video_sampul->getClientOriginalName();

        video::create([
            "video_sampul" => $new_video_sampul,
            "text_sampul" => $request["text_sampul"],
            "judul" => $request["judul"],
            "slug" => $request["slug"],
            //"konten" => $new_video_konten,
            "caption" => $request["caption"],
        ]);

        //$konten->move('video-upload/', $new_video_konten);
        $video_sampul->move('img-video-sampul/', $new_video_sampul);

        return redirect('/admin/list-video')->with('success', 'Video Berhasil Ditambahkan');
    }

    public function index()
    {
        $videos = video::all();
        return view('admin.video.list', compact('videos'));
    }

        // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $video = video::find($id)->first();
        return view('admin.video.edit',compact('video'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'konten' => 'mimes:jpeg,jpg,png|max:2200', //masih belum bisa upload 2
            'caption' => 'required'
        ]);

        $video = video::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-video-sampul/".$video->picture);
            $picture = $request->picture;
            $new_video_sampul = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-video-sampul/', $new_video_sampul);
/*
            $request->has('konten_picture')) {
            File::delete("img-video-konten/".$video->konten_picture);
            $konten_picture = $request->konten_picture;
            $new_video_konten = time() . ' - ' . $konten_picture->getClientOriginalName();
            $konten_picture->move('img-video-konten/', $new_video_sampul);
*/
            $video_data = [
                "gambar_sampul" => $new_video_sampul,
                "text_sampul" => ["text-sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "konten" => $new_konten,
                "caption" => $request["caption"],
            ];
        } else {
            $video_data = [
                "gambar-sampul" => $new_picture["gambar-sampul"],
                "text_sampul" => $request["text_sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "konten" => $new_konten,
                "caption" => $request["caption"]
            ];
        }
        
        $video->update($video_data);

        return redirect('/admin/list-video')->with('success', 'Submission successfully updated!');
    }

    public function destroy($id) {
        $submission = DB::table('videos')->where('id', $id)->delete();
        return redirect('/admin/list-video')->with('success', 'Submission successfully deleted!');
    }
/*
    public function upload($id) {
        $video = Video::where('id',$id)->first();
        return view('layouts.video_content',compact('article')); //belum ditambahin ke layout
    }

    public function list_content() {
        $videos = Video::all();
        return view('layouts.video',compact('videos')); 
    }
*/
}
