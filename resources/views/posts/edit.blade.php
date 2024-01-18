<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Edit Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" name="content" rows="4" required>{{ $post->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection