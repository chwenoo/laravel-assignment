@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center">Update Article</h1>
        <div style="max-width: 500px" class="mx-auto">
            @error('slug')
                <div class="alert alert-danger mt-3">{{$message}}</div>
            @enderror
            <form action="{{route('articles.update', $article->id)}}" method="POST" class="form">
                @csrf
                @method('PATCH')
                <div class="mb-2">
                    <label for="name" class="fw-semibold">Title:</label>
                    <input type="text" name="title" id="name" class="form-control" value="{{$article->title}}">
                </div>
                <div class="mb-2">
                    <label for="slug" class="fw-semibold">Slug:</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{$article->slug}}">
                </div>
                <div class="mb-2">
                    <label for="context" class="fw-semibold">Context:</label>
                    <textarea name="context" id="context" cols="30" rows="5" class="form-control">{{$article->context}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="fw-semibold">Excerpt:</label>
                    <input type="text" name="excerpt" id="excerpt" class="form-control" value="{{$article->excerpt}}">
                </div>
                <button type="submit" class="btn btn-primary w-100">update</button>
            </form>
        </div>
    </div>
@endsection
