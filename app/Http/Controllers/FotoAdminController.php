<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FotoAdmin;
use DB;
use File;

class FotoAdminController extends Controller
{
    public function create()
    {
        return view('admin.foto.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'foto_konten' => 'required|file|image|max:2200',
            'caption' => 'required',
        ]);

        $extFoto = $request->foto_konten->getClientOriginalExtension();
        $pathFoto = "foto-".time().".".$extFoto;
        $pathStore = $request->foto_konten->move(public_path('img-foto-konten'), $pathFoto);

        FotoAdmin::create([
            "judul" => $request["judul"],
            "foto_konten" => $pathFoto,
            "caption" => $request["caption"],
        ]);

        //$foto_konten->move('img-foto-konten/', $new_foto_konten);

        return redirect('/admin/list-foto')->with('success', 'Foto Berhasil Ditambahkan!');
    }

    public function index()
    {
        $fotos = FotoAdmin::all();
        return view('admin.foto.list', compact('fotos'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $foto = FotoAdmin::find($id)->first();
        return view('admin.foto.edit',compact('foto'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'judul' => 'required',
            'foto_konten' => 'mimes:jpeg,jpg,png|max:2200', 
            'caption' => 'required'
        ]);

        $foto = FotoAdmin::findorfail($id);
        if ($request->has('picture')) {
            File::delete("img-foto-konten/".$foto->picture);
            $picture = $request->picture;
            $pathFoto = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('img-foto-konten/', $pathFoto);
/*
            $request->has('konten_picture')) {
            File::delete("img-foto-konten/".$foto->konten_picture);
            $konten_picture = $request->konten_picture;
            $new_foto_konten = time() . ' - ' . $konten_picture->getClientOriginalName();
            $konten_picture->move('img-foto-konten/', $new_foto_sampul);
*/
            $foto_data = [
                "judul" => $request["judul"],
                "foto_konten" => $pathFoto,
                "caption" => $request["caption"],
            ];
        } else {
            $foto_data = [
                "judul" => $request["judul"],
                //"foto_konten" => $pathFoto,
                "caption" => $request["caption"]
            ];
        }
        
        $foto->update($foto_data);

        return redirect('/admin/list-foto')->with('success', 'Foto Berhasil Diupdate!');
    }

    public function destroy($id) {
        $submission = DB::table('fotos')->where('id', $id)->delete();
        return redirect('/admin/list-foto')->with('success', 'Foto Berhasil Dihapus!');
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
