@extends('layouts.main')

@section('content')

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-center">Articles List</h2>
            <a href="{{route('create-article')}}" class="btn btn-primary">+ Create Article</a>
        </div>

        <table class="table table-hover table-bordered text-center">
            <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Body</th>
                <th scope="col">Themes</th>
{{--                <th scope="col">Email</th>--}}
                <th scope="col">Phone</th>
                <th scope="col">Views</th>
                <th scope="col">Options</th>

            </tr>

            </thead>

            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->themes }}</td>
{{--                    <td>{{ $article->email }}</td>--}}
                    <td>{{ $article->phone }}</td>
                    <td>{{ $article->views }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
