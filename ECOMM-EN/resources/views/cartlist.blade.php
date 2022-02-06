@extends('master')
@section('content')
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <h4>Results for products</h4>
        <a href="/order" class="btn btn-success">Order Now</a><br><br>
        <div class="d-flex justify-content-between">
            @foreach ($data as $d)
                <div class="card m-2" style="width: 18rem;">
                    <img src="{{ $d->gallery }}" alt="" srcset="" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">{{ $d->name }}</h2>
                        <p class="card-text">{{ $d->description }}</p>
                        <a href="/removecart/{{ $d->cart_id }}" class="btn btn-warning">Remove</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
