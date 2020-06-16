@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-info">All Posts</a>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection
