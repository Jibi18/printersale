<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commadmin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<form action="">
@csrf
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
      <a class="navbar-brand" href="/admin">PrinteRpriX</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/admin">Product
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/adproduct">Add Product</a></li>
          <li><a href="/viewallproducts">view Product</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="/admin">Customer
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/viewallcust">view Customer</a></li>
        </ul>
      </li>
      <li class=""><a href="/viewbookings">View Bookings</a></li>
      <li class=""><a href="/payhis">Payment History</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img height="510px" src="https://i.insider.com/5deecf27fd9db222f54c9dd0?width=1200&format=jpeg" alt="...">
    </div>

    <div class="item">
      <img height="510px" src="https://www.beeindia.in/wp-content/uploads/2018/12/best-printer-in-india.jpg" alt="...">
    </div>

    <div class="item">
      <img height="510px" src="https://store.hp.com/app/assets/images/uploads/prod/5-best-hp-wireless-printers-hero1569429649730686.jpg" alt="...">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</form>
</body>
</html>