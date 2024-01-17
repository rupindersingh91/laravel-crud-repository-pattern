<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('posts.add') }}">Add Post</a>
<h2>All Posts</h2>
<ul>
    @forelse($posts as $post)
    <li>
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
    </li>
    @empty
    <p>No posts available.</p>
    @endforelse
</ul>
@endsection