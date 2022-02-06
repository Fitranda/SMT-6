@extends('master')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators bg-transparent text-black-50">
        @foreach ($data as $item )
            <li data-target="#myCarousel" data-slide-to="{{ $item->id }}" class="{{  $item['id']==1?'active':''  }} bg-dark"></li>
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      @foreach ($data as $item )
      <div class="carousel-item {{ $item['id']==1?'active':'' }}">
        <a href="/detail/{{ $item->id }}">
            <img src="{{ $item['gallery'] }}" alt="{{ $item->name }}" class="d-block w-100 img-fluid" style="height: 200px;">
            <div class="carousel-caption bg-transparent">
                <h3 class="text-black-50">{{ $item->name }}</h3>
                <p class="text-black-50">{{ $item->description }}</p>
            </div>
        </a>
      </div>
      @endforeach
    </div>

    <!-- Left and right controls -->
    {{-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> --}}
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <div class="trending-wrapper">
      <h3>Trending products</h3>
      <div class="d-flex justify-content-between">
    @foreach ($data as $item )
    <a href="/detail/{{ $item->id }}">
        {{-- <div>
            <img src="{{ $item['gallery'] }}" alt="{{ $item->name }}" class="img-fluid">
            <div class="p-2 bd-highlight">
            <h3 class="text-black-50">{{ $item->name }}</h3>
            </div>
        </div> --}}
        <div class="card m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{ $item['gallery'] }}" alt="{{ $item->name }}" >
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">{{ $item->description }}</p>
            </div>
        </div></a>
    @endforeach
      </div>
  </div>
@endsection
