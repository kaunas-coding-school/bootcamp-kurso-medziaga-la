@extends('layouts.app')

@section('title', 'Create movie')

@section('content')
<h1 class="text-center">Add new movie</h1>
<form class="form-horizontal" action="{{ route('movies.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="col-xs-4 control-label" for="title">Enter movie title:</label>
        <div class="col-xs-4">
            <input class="form-control" id="title" type="text" name="title">
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-4 control-label" for="release_date">Enter release date:</label>
        <div class="col-xs-4">
            <input class="form-control" id="release_date" type="date" name="release_date">
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary btn-lg" type="submit">Save movie</button>
    </div>
</form>
@endsection
