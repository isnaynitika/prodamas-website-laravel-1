@extends('admin.master')

@section('title')
    Audio Baru
@endsection

@section('content')
    @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <form action="/admin/list-audio" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
            <label for="gambar_sampul">Upload Gambar Sampul</label><br>
            <input type="file" name="gambar_sampul" id="gambar_sampul">
            @error('gambar_sampul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="text_sampul">Caption Sampul</label>
            <input type="text" class="form-control" name="text_sampul" id="text_sampul" placeholder="Judul">
            @error('text_sampul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="judul">Judul</label>
            <input name="judul" class="form-control" name="judul" id="judul" placeholder="Judul"></input>
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input name="slug" class="form-control" name="slug" id="slug" placeholder="Slug"></input>
            @error('slug')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="konten">Konten</label><br>
            <input type="file" name="konten" id="konten">
            @error('konten')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Audio</button>
        <a href="/admin/list-audio" class="btn btn-outline-primary">Kembali</a>
    </form>
@endsection