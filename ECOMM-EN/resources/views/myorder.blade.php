@extends('master')
@section('content')
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <h4>My Order</h4>
        <div class="d-flex justify-content-between">
            @foreach ($total as $d)
                <div class="card m-2" style="width: 18rem;">
                    <img src="{{ $d->gallery }}" alt="" srcset="" class="img-fluid card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Name : {{ $d->name }}</h2>
                        <p class="card-text">Delivery Status : {{ $d->status }}</p>
                        <p class="card-text">Address : {{ $d->address }}</p>
                        <p class="card-text">Payment Status : {{ $d->payment_status }}</p>
                        <p class="card-text">Delivery : {{ $d->payment_mehod }}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
