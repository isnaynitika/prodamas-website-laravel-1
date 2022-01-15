@extends('admin.master')

@section('title')
    Foto Baru
@endsection

@section('content')
    <!--notif-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>
    @if(session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{session('success')}}
            <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- @if(session('success')) 
        <div class="alert alert-success">
            {{session('success')}}
            <button type="button" class="btn-close t" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif -->

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
            <label for="konten">Konten</label><br>
            <input type="file" name="konten" id="konten">
            @error('konten')
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