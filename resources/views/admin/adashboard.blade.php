<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<form action="">
{{csrf_field()}}
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
    <h4>dashboard</h4>
    <table class="table table-hover">
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th></th>
    </thead>
    <tbody>
    <tr>
        <td>admin</td>
        <td>admin@gmail.com</td>
        <td><a href="{{ route('auth.logout') }}">Logout</a></td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</form>
</body> 
</html>