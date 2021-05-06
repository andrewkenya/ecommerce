@extends('layouts.app')
@section('content')
<div class="container mt-9">
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <form action="login" method="POST">
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
        
    </div>
</div>

@endsection