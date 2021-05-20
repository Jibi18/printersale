<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commprinter</title>
</head>
<body>
<form action="/" method="post">
@csrf
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
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="510px" src="https://i.insider.com/5deecf27fd9db222f54c9dd0?width=1200&format=jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img height="510px" src="https://www.beeindia.in/wp-content/uploads/2018/12/best-printer-in-india.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img height="510px" src="https://store.hp.com/app/assets/images/uploads/prod/5-best-hp-wireless-printers-hero1569429649730686.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@yield("content")
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>