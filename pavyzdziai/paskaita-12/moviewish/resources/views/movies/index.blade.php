@extends('layouts.app')

@section('title', 'Movies Index')

@section('content')
<h1>Movies list</h1>
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
            <td><a class="btn btn-default"
                href="{{ route('movies.show', [$movie->id]) }}">View details</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
