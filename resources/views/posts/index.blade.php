@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <ul>
            @foreach($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
