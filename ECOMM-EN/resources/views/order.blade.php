@extends('master')
@section('content')
    <div class="col-sm-10">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Amount</th>
                <th scope="col">Tax</th>
                <th scope="col">Delivery</th>
                <th scope="col">Total Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $total }}</td>
                <td>$0</td>
                <td>$10</td>
                <td>{{ $total + 10 }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">address</label>
                  <textarea name="address" class="form-control" placeholder="Enter your addres"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Payment Method</label><br><br>
                  <input type="radio" value="cash" name="payment"><span>Online payment</span><br><br>
                  <input type="radio" value="cash" name="payment"><span>Emi payment</span><br><br>
                  <input type="radio" value="cash" name="payment"><span>Payment on delivery</span>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>
@endsection
