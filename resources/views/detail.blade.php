@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h2>{{$product['price']}}</h2>
            <h2>{{$product['description']}}</h2>
            <a href="">Add to card</a>
            <a href="">Buy Now</a></a>
        </div>
    </div>
</div>
@endsection