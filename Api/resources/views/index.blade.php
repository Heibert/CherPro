<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    <title>Asistencias</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<nav class="navbar text-uppercase navbar-expand-md  bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="{{ url('img/logo.png')}}" class="d-inline-block align-top" alt="logo">
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ route('login.index') }}"><i class="bi bi-box-arrow-left"> Salir</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
    <div class="list-group">
  <a href="{{ url('coordinacion')}}" class="list-group-item list-group-item-action list-group-item-primary">Coordinacion</a>
  <a href="{{ url('coordinador')}}" class="list-group-item list-group-item-action list-group-item-secondary">Coordinador</a>
  <a href="{{ url('excusa')}}" class="list-group-item list-group-item-action list-group-item-success">Excusa</a>
  <a href="{{ url('programa')}}" class="list-group-item list-group-item-action list-group-item-danger">Programa</a>
  <a href="{{ url('reporte')}}" class="list-group-item list-group-item-action list-group-item-warning">Reporte</a>
  <a href="{{ url('tematica')}}" class="list-group-item list-group-item-action list-group-item-info">Tematica</a>
  <a href="{{ url('trimestre')}}" class="list-group-item list-group-item-action list-group-item-light">Trimestre</a>
  <a href="{{ url('administrador')}}" class="list-group-item list-group-item-action list-group-item-dark">Administrador</a>
  <a href="{{ url('http://localhost:3000')}}" class="list-group-item list-group-item-action list-group-item-primary">Asistencia</a>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</body>
</html>