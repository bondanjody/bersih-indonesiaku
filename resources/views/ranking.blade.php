@extends('layouts.main')

@section('container')
    <div class="mb-5">
        <h1 class="mb-4">Kontributor Teratas</h1>
        {{-- <table border="1">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Author Name</th>
                    <th>Number of Posts</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $index => $author)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->posts_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
        <ol>
            @foreach ($authors as $index => $author)
                <li><a href="/posts?author={{ $author->username }}">{{ $author->name }}</a> ({{ $author->posts_count }}
                    kontribusi)</li>
            @endforeach
        </ol>
    </div>
@endsection
