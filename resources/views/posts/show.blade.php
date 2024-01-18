<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <a href="{{ route('posts.index') }}" class="btn btn-secondary mb-3">All Posts</a>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->content }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
            </form>
        </div>
    </div>
</div>
@endsection