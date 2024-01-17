<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
<a href="{{ route('posts.index') }}">All Posts</a>

<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
</form>
@endsection