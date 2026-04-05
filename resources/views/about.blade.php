@extends('base.base')
@section('content')
    <h1>About Me</h1>
    <p>Welcome to my homepage!</p>
    <img src="{{ asset('images/rapunzel.jpeg') }}" alt="" class="img-fluid rounded mb-4" style="max-width: 300px;">
    <p>This is a simple homepage created with Laravel and Blade templating.</p>
@endsection