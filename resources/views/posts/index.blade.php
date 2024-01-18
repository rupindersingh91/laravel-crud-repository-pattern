<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <a class="btn btn-primary mb-3" href="{{ route('posts.add') }}">Add Post</a>
    <div class="card">
        <div class="card-header bg-dark text-light">
            <h2 class="m-0">All Posts</h2>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @forelse($posts as $post)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </li>
                @empty
                <li class="list-group-item">No posts available.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection