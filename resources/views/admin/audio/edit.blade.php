@extends('admin.master')

@section('title')
    Edit Audio
@endsection

@section('content')

    <form action="/admin/audio/{{$audio->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="gambar_sampul">Gambar Sampul</label><br>
            <input type="file" name="gambar_sampul" id="gambar_sampul">
            @error('gambar_sampul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of audio" value="{{$audio->judul}}">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <div class="form-group">
            <label for="audio">Konten</label>
            <textarea name="audio" class="form-control" cols="30" rows="10">{{$audio->audio}}</textarea>
            @error('audio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" class="form-control" cols="30" rows="10"></textarea>
            @error('caption')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit Audio</button>
        <a href="/admin/list-audio" class="btn btn-outline-primary">Back</a>
    </form>
@endsection