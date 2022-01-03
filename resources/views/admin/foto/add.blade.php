@extends('admin.master')

@section('title')
    Foto Baru
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="/admin/list-foto" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input name="judul" class="form-control" name="judul" id="judul" placeholder="Judul">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="foto_konten">Konten</label><br>
            <input type="file" name="foto_konten" id="foto_konten">
            @error('foto_konten')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" class="form-control" cols="30" rows="10"></textarea>
            @error('caption')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Foto</button>
        <a href="/admin/list-foto" class="btn btn-outline-primary">Kembali</a>
    </form>
@endsection