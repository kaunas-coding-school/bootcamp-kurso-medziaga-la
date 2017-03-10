@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Search for movies</h1>
    <form action="{{ route('search') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="keyword">
        <input type="submit" value="Send">
    </form>
</div>
@endsection
