<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
<h2>Create a New Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" rows="4" required></textarea>
    <br>
    <button type="submit">Create Post</button>
</form>
@endsection