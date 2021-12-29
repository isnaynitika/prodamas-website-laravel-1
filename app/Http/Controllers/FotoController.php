<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use DB;
use File;

class FotoController extends Controller
{
    public function create()
    {
        return view('admin.foto.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'konten' => 'mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required',
            //'picture' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        $foto_sampul = $request->foto_sampul;
        $new_foto_sampul = time() . ' - ' . $foto_sampul->getClientOriginalName();

        $konten = $request->konten;
        $new_konten = time() . ' - ' . $konten->getClientOriginalName();


        foto::create([
            "gambar_sampul" => $new_foto_sampul,
            "text_sampul" => $request["text_sampul"],
            "judul" => $request["judul"],
            "slug" => $request["slug"],
            "konten" => $new_konten,
            "caption" => $request["caption"],
        ]);

        //$picture->move('img-upload/', $new_picture);
        $gambar_sampul->move('img-foto-sampul/', $new_foto_sampul);
        $konten->move('img-foto-konten/', $new_foto_konten);

        return redirect('/admin/list-foto')->with('success', 'Data submission successful!');
    }

    public function index()
    {
        $fotos = foto::all();
        return view('admin.foto.list', compact('fotos'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $foto = foto::find($id)->first();
        return view('admin.foto.edit',compact('foto'));
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

        $foto = foto::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-foto-sampul/".$foto->picture);
            $picture = $request->picture;
            $new_foto_sampul = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-foto-sampul/', $new_foto_sampul);
/*
            $request->has('konten_picture')) {
            File::delete("img-foto-konten/".$foto->konten_picture);
            $konten_picture = $request->konten_picture;
            $new_foto_konten = time() . ' - ' . $konten_picture->getClientOriginalName();
            $konten_picture->move('img-foto-konten/', $new_foto_sampul);
*/
            $foto_data = [
                "gambar_sampul" => $new_foto_sampul,
                "text_sampul" => ["text-sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "konten" => $new_konten,
                "caption" => $request["caption"],
            ];
        } else {
            $foto_data = [
                "gambar-sampul" => $new_picture["gambar-sampul"],
                "text_sampul" => $request["text_sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "konten" => $new_konten,
                "caption" => $request["caption"]
            ];
        }
        
        $foto->update($foto_data);

        return redirect('/admin/list-foto')->with('success', 'Submission successfully updated!');
    }

    public function destroy($id) {
        $submission = DB::table('fotos')->where('id', $id)->delete();
        return redirect('/admin/list-foto')->with('success', 'Submission successfully deleted!');
    }
/*
    public function upload($id) {
        $foto = Foto::where('id',$id)->first();
        return view('layouts.foto_content',compact('article')); //belum ditambahin ke layout
    }

    public function list_content() {
        $fotos = Foto::all();
        return view('layouts.foto',compact('fotos')); 
    }
*/
}
