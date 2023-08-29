@extends('layouts.main')

@section('container')

<h1><strong>Category : {{ $category->name }}</strong></h1><hr>

@foreach ($posts as $post)    
    <div class="card mt-3">
        <div class="card-header bg-danger text-light">
        {{ $post->title }}
        </div>
        <div class="card-body">
        <p class="card-text">{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Detail Post</a>
        </div>
    </div>
@endforeach

@endsection