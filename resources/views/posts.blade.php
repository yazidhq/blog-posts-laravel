@extends('layouts.main')

@section('container')

<h1>Halaman Posts</h1>

@foreach ($posts as $post)    
    <div class="card mt-3">
        <div class="card-header bg-danger text-light">
        {{ $post['title'] }}
        </div>
        <div class="card-body">
        <h5 class="card-title">By: {{ $post['author'] }}</h5>
        <p class="card-text">{{ $post['body'] }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="btn btn-danger">Detail Post</a>
        </div>
    </div>
@endforeach

@endsection