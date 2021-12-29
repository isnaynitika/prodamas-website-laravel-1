@extends('admin.master')

@section('title')
    Edit Video
@endsection

@section('content')

    <form action="/admin/video/{{$video->id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status" placeholder="status of video" value="{{$video->status}}">
            @error('status')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori">kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="kategori of video" value="{{$video->kategori}}">
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
            <input type="text" class="form-control" name="text_sampul" id="text_sampul" placeholder="text_sampul of video" value="{{$video->text_sampul}}">
            @error('text_sampul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="judul of video" value="{{$video->judul}}">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" placeholder="slug of video" value="{{$video->slug}}">
            @error('slug')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="video">Konten</label>
            <textarea name="video" class="form-control" cols="30" rows="10">{{$video->video}}</textarea>
            @error('video')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">Edit Video</button>
        <a href="/admin/list-video" class="btn btn-outline-primary">Back</a>
    </form>
@endsection