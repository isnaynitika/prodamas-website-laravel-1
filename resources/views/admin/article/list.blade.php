@extends('admin.master')

@section('title')
Article Submission
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<a href="/admin/add-article" class="btn btn-primary mb-3">Add New Article</a>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Judul</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($articles as $key=>$article)
        <tr>
            <td>{{$key + 1}}</th>
            <td>{{$article->created_at}}</td>
            <!-- <td>{{$article->name}}</td> -->
            <td>{{$article->judul}}</td>
            <!-- <td>{{Str::limit($article->article, 60)}}</td> -->
            <td>{{$article->status}}</td>
            <td>
                <form action="/admin/article/{{$article->id}}" method="POST">
                    <a href="/admin/article/{{$article->id}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" onclick="return confirm('Are you sure?')"
                        value="Delete">
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