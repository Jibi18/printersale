<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://media.officedepot.com/image/upload/f_auto,q_auto/coremedia/resource/blob/337994/5423c7a20f3964ba6502f0ad551a44d7/4020-www-3-col-834x430-printer-sf-revamp-shop-by-use-home-printers-data.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      PrinteRpriX
    </a>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="navbar-brand" href="/auth/login" type="button">LOGIN</a>
    <a class="navbar-brand" href="/auth/register" type="button">SIGNUP</a>
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/prabout">INFO</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container">
<div class="row" style ="margin-top:200px">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<br>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<h4><center><b>Login</h4>
<form action="{{ route('auth.check') }}" method="post">
    @if(Session::get('fail'))
        <div class="alert alert-danger">
        {{ Session::get('fail')}}
        </div>
    @endif
@csrf
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" name="email" placeholder=" Enter your email" value="{{ old('email') }}">
<span class="text-danger">@error('email') {{ $message }} @enderror</span>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password" placeholder=" Enter the password">
<span class="text-danger">@error('password') {{ $message }} @enderror</span>
</div>
<br>
<button type="submit" class="btn btn-block btn-primary">Sign in</button>
<br>
<a href="{{ route('auth.register') }}">Don't have an account, create new</a>
</form>
</div>
</div>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body> 
</html>