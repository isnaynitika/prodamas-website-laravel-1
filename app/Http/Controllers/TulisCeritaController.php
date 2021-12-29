<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TulisCerita;
class TulisCeritaController extends Controller
{
    public function index(){
        return view('tulisCerita.index');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:50',
            'kategori' => 'required|max:20',
            'pengarang' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis' => 'required',
            'gambar' => 'required|file|image|max:1000'
        ]);
        // dump($request);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "buku-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar/buku'), $pathGambar);
        // dump($validateData);
        $buku = new TulisCerita();
        $buku->judul = $validateData['judul'];
        $buku->kategori = $validateData['kategori'];
        $buku->pengarang = $validateData['pengarang'];
        $buku->tahun_terbit = $validateData['tahun_terbit'];
        $buku->sinopsis = $validateData['sinopsis'];
        $buku->gambar = $pathGambar;
        $buku->save();

        return redirect()->route('buku.create')->with('pesan', "Buku berhasil ditambah");
    }
}
