@extends('layouts.main')

@section('container')

<h1>Halaman Posts</h1>

@foreach ($posts as $post)    
    <div class="card mt-3">
        <div class="card-header bg-danger text-light">
        {{ $post->title }}
        </div>

        <div class="card-body">
            <p class="ml-3">By. <a href="/user/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Detail Post</a>
        </div>
    </div>
@endforeach

@endsection

{{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor quasi aperiam illum labore corporis ipsam eligendi aliquam minima aliquid! Hic cum a accusantium dolor.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p> --}}

{{-- create --}}
{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sequi illo tempora, at blanditiis dolor quasi aperiam illum labore corporis ipsam eligendi aliquam minima aliquid! Hic cum a accusantium dolor.</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit minima est natus dolorem. Voluptas sequi nobis et accusantium aut? A odit voluptates aspernatur nostrum dolorum illo est alias nihil sed?</p>'
]) --}}

{{-- update --}}
{{-- Post::find(3)->update(['title' => 'Judul Ke Tiga Berubah'])
Post::where('title', 'Judul Ke Lima')->update(['title' => 'Judul Ke Lima Berubah']) --}}

{{-- create --}}
{{-- Category::create([
    'name' => 'Web Design',
    'slug' => 'web-design',
]) --}}