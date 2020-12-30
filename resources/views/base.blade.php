<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navabr-expand-lg navbar-dark bg-warning">
    <h4 class="text-white"><a class="navbar-brand">result.com</a></h4>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
        <li class="nav-item active"><a href="/insert" class="nav-link">insert</a></li>
    </ul>
</nav>
@section('content')

  @show
     
    
</body>
</html>