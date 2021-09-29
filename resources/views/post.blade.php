
@extends('layouts.main')

@section('container')
    <h3 class="mb-3">{{ $post->title }}</h3>
    <p>by. agung in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/blog">back to posts</a>
@endsection