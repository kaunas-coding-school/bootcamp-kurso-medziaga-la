@extends('layouts.app')

@section('title', 'Edit movie')

@section('content')
<h1 class="text-center">Edit movie</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" action="{{ route('movies.update', [$movie->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label class="col-xs-4 control-label" for="title">Enter movie title:</label>
        <div class="col-xs-4">
            <input class="form-control" id="title" type="text" name="title" value="{{ $movie->title }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-4 control-label" for="release_date">Enter release date:</label>
        <div class="col-xs-4">
            <input class="form-control" id="release_date" type="date" name="release_date" value="{{ $movie->release_date }}">
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary btn-lg" type="submit">Save movie</button>
    </div>
</form>
@endsection
