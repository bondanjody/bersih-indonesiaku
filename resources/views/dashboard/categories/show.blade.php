@extends('dashboard.layouts.main')

@section('container')
<div class="row my-4">
    <div class="col-lg-12">
        <h3 class="mb-3">{{ $category->name }}</h3>
        <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all categories</a>
        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit
            category</a>
        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button onclick="return confirm('Are you sure to delete this category?')" class="btn btn-danger "><span data-feather="trash-2"></span> Delete Category</button>
        </form>
        @if ($category->image)
        <img src="{{ asset('storage/'.$category->image) }}" class="img-fluid mt-3" alt="" style="max-height: 350px; overflow: hidden;">
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $category->name }}" class="img-fluid mt-3" alt="">
        @endif
    </div>
</div>
@endsection