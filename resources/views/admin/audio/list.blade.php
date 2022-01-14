@extends('admin.master')

@section('title')
Audio Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="/admin/add-audio" class="btn btn-primary mb-3">Tambah Audio</a>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Judul</th>
            <th scope="col">Konten</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($audios as $key=>$audio)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$audio->created_at}}</td>
            <td>{{$audio->judul}}</td>
            <!-- <td>{{Str::limit($audio->audio, 60)}}</td> -->
            <td>{{$audio->slug}}</td>
            <td>
                <form action="/admin/audio/{{$audio->id}}" method="POST">
                    <a href="/admin/audio/{{$audio->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Yakin data yang anda masukkan benar?')"
                        value="Hapus">
                </form>
            </td>
        </tr>
        @empty
        <tr colspan="3">
            <td>No data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection