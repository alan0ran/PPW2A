@extends('home')

@section('content')
<!-- <button href="{{ route('posts.create') }}">Create New Post</button> -->
<a href="{{ route('posts.create') }}" class="btn btn-secondary">Add New Data</a>
<!-- Kode diatas akan membuat link yang akan mengarah ke post/create -->
<!-- <button href="http://localhost:8000/posts/create">Create New Post</button> -->

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        @foreach ($posts as $post)
        <h1>{{$post->title}}<h1>
        <!-- <small>Tanggal: {{$post->created_at}}</small>
        <p>{{$post->description}}<p> -->

        <a href="/posts/{{$post->id}}" class="btn btn-primary">See More</a>
        <!-- Kemudian buat tambahkan link untuk edit pada file show.blade.php -->
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        @endforeach
    </div>
</div>

@endsection