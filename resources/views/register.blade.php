@extends('layouts.app')
@section('content')
<div class="container mt-9">
    <div class="row justify-content-md-center">
        <div class="col-sm-4">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail">User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your User Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
                </div>
        
    </div>
</div>

@endsection