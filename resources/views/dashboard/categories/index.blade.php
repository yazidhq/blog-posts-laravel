@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories</h1>
</div>

<div class="table-responsive">
    <a href="/dashboard/posts/create" class="btn btn-primary btn-sm mb-3">Create new Category</a>

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div> 
    @endif

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge btn-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge btn-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="badge bg-danger border-0" onclick="return confirm('You sure?')"><span data-feather="trash-2"></span></button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection