@extends('layouts.main')

@section('container')
 
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. Yazid Dhiaulhaq in <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></p>
    {!! $post->body !!}
</article>

@endsection