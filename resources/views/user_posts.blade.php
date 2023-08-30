@extends('layouts.main')

@section('container')

<h1>{{ $title }}</h1>   

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