@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Movie results from OMDB</h1>
    @foreach (session('movies')->results as $movie)
    <p>{{ $movie->title }}</p>
    <p>{{ $movie->overview }}</p>
    <p>{{ $movie->release_date }}</p>
    @endforeach
</div>
@endsection
