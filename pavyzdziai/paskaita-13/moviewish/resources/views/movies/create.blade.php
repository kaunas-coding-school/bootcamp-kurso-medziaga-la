@extends('layouts.app')

@section('title', 'Add a movie')

@section('content')
<h1 class="text-center">Add a new Movie</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ route('movies.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="col-xs-4 control-label" for="title">Enter the movie title</label>
        <div class="col-xs-4">
            <input id="title" class="form-control" type="text" name="title">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-4 control-label" for="release_date">Enter the release date</label>
        <div class="col-xs-4">
            <input id="release_date" class="form-control" type="date" name="release_date">
        </div>
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-default btn-lg" name="" value="Save">
    </div>
</form>
@endsection
