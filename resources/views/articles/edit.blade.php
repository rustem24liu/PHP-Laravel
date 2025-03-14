@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h2>Edit Article</h2>
        <div class="w-50 bg-white p-4 shadow rounded">
            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
                </div>
                <div class="mb-3">
                    <label>Body</label>
                    <input type="text" name="body" class="form-control" value="{{ $article->body }}" required>
                </div>
                <div class="mb-3">
                    <label>Themes</label>
                    <input type="text" name="themes" class="form-control" value="{{ $article->themes }}" required>
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label>Email</label>--}}
{{--                    <input type="email" name="email" class="form-control" value="{{ $article-> }}" required>--}}
{{--                </div>--}}
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $article->phone }}" required>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('table') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
