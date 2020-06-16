@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>
    <ul class="list-group mt-5">
        @foreach($posts as $post)
        <li class="list-group-item">
            <div class="row justify-content-between">
                <div class="col">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->category->name }} - {{ $post->title }}</a>
                </div>
                <div class="col text-right">
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>


        </li>
        @endforeach
    </ul>
@endsection
