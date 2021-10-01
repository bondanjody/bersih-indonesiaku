@extends('dashboard.layouts.main')

@section('container')
    <div class="row my-4">
        <div class="col-lg-12">
             <h3 class="mb-3">{{ $post->title }}</h3>
             <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
             <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit post</a>
             <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete post</a>
    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="">
    <article class="my-3 fs-5">
    {!! $post->body !!}
    </article>
        </div>
    </div>
@endsection