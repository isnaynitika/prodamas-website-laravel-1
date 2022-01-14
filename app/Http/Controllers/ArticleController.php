<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleAdmin;
use DB;
use File;

class ArticleController extends Controller
{
    public function create()
    {
        return view('admin.article.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'status' => 'required',
            'kategori' => 'required',
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'article' => 'required',
            //'picture' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        // $gambar_sampul = $request->gambar_sampul;
        // $new_sampul = time() . ' - ' . $gambar_sampul->getClientOriginalName();

        // sampul artikel
        $extThumb = $request->gambar_sampul->getClientOriginalExtension();
        $pathThumb = "sampul-".time().".".$extThumb;
        $pathStore = $request->gambar_sampul->move(public_path('aticleProd/sampul'), $pathThumb);

        // konten artikel
        $konten = $request->file('aticle');
        $articlename = $konten->getClientOriginalName();
        $articlepath = $konten->storeAs('article', $articlename);
        $pathStore = $request->article->move(public_path('articleProd/konten'), $articlepath);

        ArticleAdmin::create([
            "status" => $request["status"],
            "kategori" => $request["kategori"],
            "gambar_sampul" => $pathThumb,
            "text_sampul" => $request["text_sampul"],
            "judul" => $request["judul"],
            "slug" => $request["slug"],
            "article" => $request["article"],
            // "picture" => $articlename
        ]);

        $gambar_sampul->move('articleProd/sampul/', $new_sampul);

        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Ditambahkan!');
    }

    public function index()
    {
        $articles = ArticleAdmin::all();
        return view('admin.article.list', compact('articles'));
    }

    // public function show($id) {
    //     $submission = DB::table('submission')->where('id', $id)->first();
    //     return view('admin.show',compact('submission'));
    // }

    public function edit($id) {
        $article = ArticleAdmin::find($id)->first();
        return view('admin.article.edit',compact('article'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'status' => 'required',
            'kategori' => 'required',
            'gambar_sampul' => 'mimes:jpeg,jpg,png|max:2200',
            'text_sampul' => 'required',
            'judul' => 'required',
            'slug' => 'required',
            'article' => 'required',
            // 'picture' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        $article = ArticleAdmin::findorfail($id);
        if ($request->has('picture')) {
            File::delete("articleProd/sampul/".$article->picture);
            $picture = $request->picture;
            $pathThumb = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('articleProd/sampul/', $pathThumb);
            $article_data = [
                "status" => $request["status"],
                "kategori" => $request["kategori"],
                "gambar_sampul" => $pathThumb,
                "text_sampul" => $request["text-sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "article" => $request["article"],
                //"picture" => $new_picture
            ];
        } else {
            $article_data = [
                "status" => $request["status"],
                "kategori" => $request["kategori"],
                "gambar-sampul" => $pathThumb,
                "text_sampul" => $request["text_sampul"],
                "judul" => $request["judul"],
                "slug" => $request["slug"],
                "article" => $request["article"]
            ];
        }
        
        $article->update($article_data);

        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Diedit!');
    }

    public function destroy($id) {
        $submission = DB::table('articles')->where('id', $id)->delete();
        return redirect('/admin/list-article')->with('success', 'Artikel Berhasil Dihapus!');
    }

    public function upload($id) {
        $article = ArticleAdmin::where('id',$id)->first();
        return view('layouts.article_content',compact('article')); 
    }

    public function list_content() {
        $articles = ArticleAdmin::all();
        return view('layouts.article',compact('articles')); 
    }
    
}
