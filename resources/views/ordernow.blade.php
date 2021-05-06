@extends('layouts.app')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Amount</th>
                <th scope="col">Tax</th>
                <th scope="col">Delivery</th>
                <th scope="col">Total Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                
                <td>$ {{ $total}}</td>
                <td>$ 0</td>
                <td>$ 10</td>
                <td>$ {{ $total + 10}}</td>
            
              </tr>
            
            </tbody>
          </table>
    </div>
    <form action="/orderplace" method="post">
        @csrf
        <div class="form-group col-md-6">
            <textarea  name="address" type="email" rows="5" placeholder="enter your address"  class="form-control"></textarea>
        </div>
        <div class="form-group mx-4">
          <label for="pwd">Payment Method</label><br><br>
          <input type="radio"  value="cash"   name="payment"><span> Online Payment</span> <br> <br>
          <input type="radio"  value="cash"   name="payment"><span> EMI Payment</span> <br> <br>
          <input type="radio"  value="cash"   name="payment"><span> Payment on Delivery</span>
          
        </div>
        <button type="submit" class="btn btn-primary ml-4">Order Now</button>
    </form>
</div>


@endsection