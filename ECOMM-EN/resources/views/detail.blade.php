@extends('master')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <img src="{{ $data->gallery }}" alt="" srcset="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{ $data->name }}</h2>
            <h3>Price : ${{ $data->price }}</h3>
            <h4>Detail : {{ $data->description }}</h4>
            <h4>Category : {{ $data->category }}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" id="" value="{{ $data->id }}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
@endsection
