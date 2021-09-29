
@extends('layouts.main')

@section('container')
    <h3 class="mb-3">{{ $post->title }}</h3>
    {!! $post->body !!}
    <a href="/blog">back to posts</a>
@endsection