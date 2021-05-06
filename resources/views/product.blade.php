@extends('layouts.app')
@section("content")
<div class="custom-product">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

     <ol class="carousel-indicators">
       @foreach ($products as $product)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
    @endforeach
  </ol>
  <!--Wrapper for slides -->
  <div class="carousel-inner">
     @foreach($products as $product)
     <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
      <a href="detail/{{$product['id']}}">

      {{-- <img class="d-block w-100" src="{{$product['gallery']}}" alt="First slide"> --}}
      {{-- <img  class="d-block w-100" src="{{ asset(.'/images/'.$product->image) }}" alt="" title="" /> --}}
      <img class="d-block w-100 slider-img" src="{{$product['gallery']}}" alt="">
          <div class="carousel-caption d-none d-md-block  slider-text">
          <h5>{{ $product['name'] }}</h5>
          <p>{{ $product['description'] }}</p>
      </div>
      </a>
    </div>
     @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="trending-wrapper">
  <h3>Trending Products</h3>
   @foreach($products as $product)
   <div class="trending-item">
       <a href="detail/{{$product['id'] }}">
      <img class="trending-image" src="{{$product['gallery'] }}">
      <div class="">
        <h3>{{ $product['name']}}</h3>
      </div>
       </a>
   </div>
   @endforeach
     
</div>
</div>

@endsection