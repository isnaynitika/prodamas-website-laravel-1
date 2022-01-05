@extends('admin.master')

@section('title')
    Edit Artikel
@endsection

@section('content')

    <form action="/admin/foto/{{$foto->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of foto" value="{{$foto->judul}}">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="foto_konten">Konten</label><br>
            <input type="file" name="foto_konten" id="foto_konten" value="{{$foto->foto_konten}}">
            @error('foto_konten')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" class="form-control" cols="30" rows="10">{{$foto->caption}}</textarea>
            @error('caption')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit Foto</button>
        <a href="/admin/list-foto" class="btn btn-outline-primary">Back</a>
    </form>
@endsection