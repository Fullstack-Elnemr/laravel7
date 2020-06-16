@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-info">All Posts</a>
    <form action="{{ route('posts.update', $post) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category" class="form-control">
                @foreach($categories as $category)
                    @if ($category->id === $post->category_id)
                        <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Save</button>

        </div>
    </form>
@endsection
