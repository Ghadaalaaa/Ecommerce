@extends('master')
@section("content")
<div class="container custom product">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
<div class="trinding-wrapper">
    <h1>Trinding products</h1>
    @foreach($products as $item)
    <div class="search">
      <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
     </a>
      </div>
      @endforeach
</div>
</div>
@endsection