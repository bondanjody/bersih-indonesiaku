
@extends('layouts.main')

@section('container')
    <h3 class="mb-3">{{ $post->title }}</h3>
    <p>by <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/blog" class="d-block mt-4">back to posts</a>
@endsection