@extends('layouts.main')

@section('container')

<h1>{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->title }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h5 class="card-title"><strong>{{ $posts[0]->title }}</strong></h5>

            <p class="ml-3">
                By. <a href="/user/{{ $posts[0]->user->username }}"  class="text-decoration-none">{{ $posts[0]->user->name }}</a> 
                in <a href="/categories/{{ $posts[0]->category->slug }}"  class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
            </p>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-danger">Detail Post</a>
        </div>
    </div>
@else   
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="row">
    @foreach ($posts->skip(1) as $post)   
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">

            <a href="/categories/{{ $post->category->slug }}">
                
                <div class="position-absolute px-3 py-2 mt-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                {{ $post->category->name }}
                </div>
            </a>

            <img src="https://source.unsplash.com/500x400/?{{ $post->title }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>

                <p class="ml-3">
                    By. <a href="/user/{{ $post->user->username }}"  class="text-decoration-none">{{ $post->user->name }}</a><br>
                    <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>

                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Detail Post</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection