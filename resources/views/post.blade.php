@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="/user/{{ $user->id }}">{{ $user->name }}</a> in <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></p>
    {!! $post->body !!}
</article>

@endsection