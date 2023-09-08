@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <p>
                By. <a href="/posts?user={{ $post->user->username }}"  class="text-decoration-none">{{ $post->user->name }}</a>
                in <a href="/posts?category={{ $post->category->slug }}"  class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mb-3" alt="...">
            @else
                <img src="https://source.unsplash.com/500x400/?{{ $post->title }}" class="card-img-top img-fluid mb-3" alt="...">
            @endif

            <div style="text-align: justify;">
                {!! $post->body !!}
            </div>

            <a href="/posts" class="text-decoration-none mt-3 mb-3 btn btn-danger btn-sm">Back to post</a>
            
        </div>
    </div>
</div>

@endsection