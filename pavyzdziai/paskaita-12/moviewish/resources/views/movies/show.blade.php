@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
<h1>{{ $movie->title }}</h1>
<p>{{ $movie->release_date }}</p>
<a class="btn btn-default" href="{{ URL::to('movies') }}">View all</a>
@endsection
