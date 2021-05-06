<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">E-com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
        </ul>

      <form action="/search" class="form-inline my-2 my-lg-0 navbar-left" >
        <input type="text" name="query"  class="form-control mr-sm-2 search-box"  placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <ul class="nav navbar-nav navbar-right ">
        <li><a class="nav-link" href="/cartlist">cart({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">LogOut</a>
           
            
          </div>
        </li>
      
  @else
  <li><a href="/login">Login</a></li>
  <li class="ml-5"><a href="/register">Register</a></li>
  @endif
      </ul>
        
      </div>
    </div>
  </nav>