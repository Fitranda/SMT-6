<?php
    use App\Http\Controllers\ProductController;
    $total = ProductController::cartItem();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">Order</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="nav navbar-nav rightButton my-2 my-lg-0 ml-lg-3">
          <li><a href="/cartList">Cart({{ $total }})</a></li>
          @if (Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Session::get('user')->name }}</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif

      </ul>
    </div>
  </nav>
