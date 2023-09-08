@extends('layouts.main')

@section('container')

<h1 class="text-center mb-3"><strong>{{ $title }}</strong></h1>

<div class="row">
    <div class="col-md-12 mb-3">
        <form action="/posts" method="get">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>   
            </div>       
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">

        @if ($posts[0]->image)
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid mb-3" alt="...">
        @else
            <img src="https://source.unsplash.com/500x400/?{{ $posts[0]->title }}" class="card-img-top img-fluid mb-3" alt="...">
        @endif
        
        <div class="card-body text-center">
            <h5 class="card-title"><strong>{{ $posts[0]->title }}</strong></h5>

            <p class="ml-3">
                By. <a href="/posts?user={{ $posts[0]->user->username }}"  class="text-decoration-none">{{ $posts[0]->user->name }}</a> 
                in <a href="/posts?category={{ $posts[0]->category->slug }}"  class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
            </p>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-danger">Detail Post</a>
        </div>
    </div>

    <div class="row">
        @foreach ($posts->skip(1) as $post)   
        <div class="col-md-4 mb-3">
            <div class="card">

                <a href="/posts?category={{ $post->category->slug }}">
                    <div class="position-absolute px-3 py-2 mt-3 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                    {{ $post->category->name }}
                    </div>
                </a>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mb-3" alt="...">
                @else
                    <img src="https://source.unsplash.com/500x400/?{{ $post->title }}" class="card-img-top img-fluid mb-3" alt="...">
                @endif

                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $post->title }}</strong></h5>

                    <p class="ml-3">
                        By. <a href="/posts?user={{ $post->user->username }}"  class="text-decoration-none">{{ $post->user->name }}</a><br>
                        <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
                    </p>

                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Detail Post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else   
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center mt-3">
    {{ $posts->links() }}
</div>

@endsection