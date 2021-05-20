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
<div class="container">
<div class="row" style ="margin-top:200px">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<h4><center><b>ADD PRODUCT</h4>
<form action="/productread" method="post">
{{csrf_field()}}
    <table class="table table-borderless">
        <tr>
            <td>Product Name</td>
            <td><input type="text" name="pname" class="form-control"></td>
        </tr>
        <tr>
            <td>Product Price</td>
            <td><input type="text" name="ppri" class="form-control"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="pdes" class="form-control"></td>
        </tr>
        <tr>
            <td>Gallery</td>
            <td><input type="text" name="pgal" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-warning">SUBMIT</button></td>
        </tr>
    </table>
</form>
</div>
</div>
</div>
</body>
</html>   