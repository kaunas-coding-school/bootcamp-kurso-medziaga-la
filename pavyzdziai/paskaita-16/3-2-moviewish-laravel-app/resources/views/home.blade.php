@extends('layouts.app')

@section('content')
<div class="col-xs-12">
    <div class="jumbotron">
      <h1>Hello, world!</h1>
      <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
    </div>
</div>
  <form action="{{ route('home') }}" method="post">
      {{ csrf_field() }}
      <input type="textarea" name="comment" value="">
      <input type="submit" value="Send">
  </form>
@endsection
