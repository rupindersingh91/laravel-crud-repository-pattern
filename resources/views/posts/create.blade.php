<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.index') }}" class="btn btn-primary mb-3 mt-2">All Post</a>
    <h2>Create a New Post</h2>
    <form action="{{ route('posts.store') }}" method="POST" class="mb-3">
        @csrf
        <label class="form-label" for="title">Title:</label>
        <input type="text" class="form-control" name="title" required>
        <br>
        <label class="form-label" for="content">Content:</label>
        <textarea name="content" class="form-control" rows="4" required></textarea>
        <br>
        <button class="btn btn-primary" type="submit">Create Post</button>
    </form>
</div>
@endsection