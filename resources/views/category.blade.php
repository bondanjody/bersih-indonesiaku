@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post category: {{ $category }}</h1>
@foreach ($posts as $post)
<article>
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <p>by <a href="">{{ $post->user->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}">Read more...</a>
</article>
@endforeach
@endsection