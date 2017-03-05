@extends('layouts.app')

@section('title', 'Edit movie')

@section('content')
<h1 class="text-center">Edit Movie {{ $movie->title }}</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ route('movies.update', $movie->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label class="col-xs-4 control-label" for="title">Enter the movie title</label>
        <div class="col-xs-4">
            <input id="title" class="form-control" type="text" name="title" value="{{ $movie->title }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-4 control-label" for="release_date">Enter the release date</label>
        <div class="col-xs-4">
            <input id="release_date" class="form-control" type="date" name="release_date" value="{{ $movie->release_date }}">
        </div>
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-default btn-lg" value="Save">
    </div>
</form>
@endsection
