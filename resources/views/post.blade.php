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

            <img src="https://source.unsplash.com/500x400/?{{ $post->title }}" class="card-img-top img-fluid mb-3" alt="...">

            <div style="text-align: justify;">
                {!! $post->body !!}
            </div>

            <a href="/posts" class="text-decoration-none">Back to post</a>
        </div>
    </div>
</div>

@endsection