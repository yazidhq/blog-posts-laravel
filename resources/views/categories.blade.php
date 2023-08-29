@extends('layouts.main')

@section('container')

<h1>Halaman Category</h1>

@foreach ($categories as $category)    
    <div class="card mt-3">
        <div class="card-header bg-danger text-light">
        {{ $category->name }}
        </div>
        <div class="card-body">
        <a href="/categories/{{ $category->slug }}" class="btn btn-danger">Detail Post</a>
        </div>
    </div>
@endforeach

@endsection