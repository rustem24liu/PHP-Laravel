@extends('layouts.main')

@section('content')
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="w-50 p-4 rounded bg-light shadow-lg">
            <h2 class="text-center mb-4">Create New Article</h2>
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Body</label>
                    <input type="text" name="body" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Themes</label>
                    <input type="text" name="themes" class="form-control" required>
                </div>
{{--                <div class="mb-3">--}}
{{--                    <label class="form-label">Email</label>--}}
{{--                    <input type="email" name="email" class="form-control" required>--}}
{{--                </div>--}}
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
