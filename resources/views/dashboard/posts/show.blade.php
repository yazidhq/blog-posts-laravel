@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h2 class="my-3">{{ $post->title }}</h2>

            <div class="mb-3">
                <a href="/dashboard/posts" class="badge btn-success"><span data-feather="skip-back"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge btn-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="badge bg-danger border-0" onclick="return confirm('You sure?')"><span data-feather="trash-2"></span></button>
                </form>
            </div>

            <img src="https://source.unsplash.com/500x400/?{{ $post->title }}" class="card-img-top img-fluid mb-3" alt="...">

            <div style="text-align: justify;">
                {!! $post->body !!}
            </div>

        </div>
    </div>
</div>

@endsection