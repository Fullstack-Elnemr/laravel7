@extends('layouts.app')
@section('title', 'Show Post')
@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-info">All Posts</a>
    <h1>Show Posts :</h1>
    <hr>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
@endsection
