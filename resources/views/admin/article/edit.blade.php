@extends('admin.master')

@section('title')
    Edit Artikel
@endsection

@section('content')

    <form action="/admin/article/{{$article->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status" placeholder="status of article" value="{{$article->status}}">
            @error('status')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori">kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori of article" value="{{$article->kategori}}">
            @error('kategori')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar_sampul">Gambar Sampul</label><br>
            <input type="file" name="gambar_sampul" id="gambar_sampul">
            @error('gambar_sampul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="text_sampul">Caption Sampul</label>
            <input type="text" class="form-control" name="text_sampul" id="text_sampul" placeholder="text_sampul of article" value="{{$article->text_sampul}}">
            @error('text_sampul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of article" value="{{$article->judul}}">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" placeholder="slug of article" value="{{$article->slug}}">
            @error('slug')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="article">Konten</label>
            <textarea name="article" class="form-control" cols="30" rows="10">{{$article->article}}</textarea>
            @error('article')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit Article</button>
        <a href="/admin/list-article" class="btn btn-outline-primary">Back</a>
    </form>
@endsection