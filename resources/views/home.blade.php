@extends('base.base')
@section('content')
    <h1>My Homepage</h1>
    <p>Welcome to my homepage!</p>
    <p>This is a simple homepage created with Laravel and Blade templating.</p>
    <p>Product Category: {{ $product_category }}</p>
    <p>Product Name: {{ $product_name }}</p>
    <p>Product Price: Rp {{ number_format($product_price, 0, ',', '.') }}</p>
    <button style="border-radius: 5px;">{{ $button }}</button>
    {!! $button2 !!}
@endsection
