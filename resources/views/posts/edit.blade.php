<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
<h2>Edit Post</h2>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $post->title }}" required>

    <br>

    <label for="content">Content:</label>
    <textarea name="content" rows="4" required>{{ $post->content }}</textarea>
    <br>

    <button type="submit">Update Post</button>
</form>
@endsection