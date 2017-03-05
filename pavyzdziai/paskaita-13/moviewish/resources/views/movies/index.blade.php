@extends('layouts.app')

@section('title', 'Movies Index')

@section('content')
<h1 class="text-center">My Wishlist</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th colspan="2">Release Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->release_date }}</td>
            <td><a class="btn btn-default" href="{{ route('movies.show', $movie->id) }}">View details</a>
                <a class="btn btn-default" href="{{ route('movies.edit', $movie->id) }}">Edit movie</a>
                <form class="delete-movie-form" action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input class="btn btn-default" type="submit" value="Delete movie">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
