<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commcar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('LoggedUser'))
{
$total=productcontroller::cartitem();
}
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PrinteRpriX</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/product">Home</a></li>
        <li class=""><a href="/myorders">Orders</a></li>
        
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">Cart({{$total}})</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-sm-10">
<table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$productmodels}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$productmodels+10}}</td>
      </tr>
    </tbody>
  </table>
  </div>
  <br><br><br><br><br><br><br><br><br><br>
  <form action="/orderplace" method="post">
  @csrf
  <div class="form-group">
  <label for="pwd">Payment Method</label><br><br>
  <input type="radio" value="cash" name="payment"><span>Payment on delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-default">Order</button>
</form>
  </div>
  </div>
  </body>
<style>
img.slider-img{
  height: 400px !important
}
.slider-text{
    background-color: #150f0fc2 !important;
}
.trending-image{
    height:100px;
}
.trending-item{
    float:left;
    width:12.5%;
}
.trending-wrapper{
    margin:30px;
}
.search-box{
  width: 500px !important
}
.cart-list-divider{
    border-bottom:1px solid #ccc;
    margin-bottom:20px;
    padding-bottom:20px;
}
</style>
</html>