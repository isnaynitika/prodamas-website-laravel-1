<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Share;
use DB;


class artikelController extends Controller
{
    public function index(){
        return view('artikel.index');
    }

    // public function show(){
    //     return "Artikel Berhasil ditambahkan";
    // }

    public function add_process(request$article){
        {
            DB::table('kontenn')->insert(['judul_konten'=>$article->judul_konten, 'slug_konten'=>$article->slug_konten, 'isi_konten'=>$article->isi_konten]);

            return redirect()->action('artikelcontroller@show');
        }
    }

    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp();
        //dd($shareComponent);
        return view('artikel.index', compact('shareComponent'));
    }
}
