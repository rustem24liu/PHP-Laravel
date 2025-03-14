@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h2 class="m-2">Article Details</h2>
        <div class="w-50 bg-white p-4 shadow rounded">
            <p><strong>Title:</strong> {{ $article->title }}</p>
            <p><strong>Body:</strong> {{ $article->body }}</p>
            <p><strong>Hash:</strong> {{ $article->themes }}</p>
{{--            <p><strong>Email:</strong> {{ $article->email }}</p>--}}
            <p><strong>Phone:</strong> {{ $article->phone }}</p>

            <a href="{{ route('table') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
