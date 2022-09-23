<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherpro</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ url('css/tarjeta.css')}}">
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
          <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ route('login.destroy') }}"><i class="bi bi-box-arrow-left"> Cerra Sesión</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
<main>
  <div class="container">
        <li class="card">
          <div class="contenido">
            <h3>EXCUSA</h3>
              <a href="{{ url('excusa')}}">Excusa</a>
          </div>
        </li>

        <li class="card">
          <div class="contenido">
            <h3>PROGRAMA</h3>
              <a href="{{ url('programa')}}">Programa</a>
          </div>  
        </li>

        <li class="card">
          <div class="contenido">
            <h3>TEMÁTICA</h3>
              <a href="{{ url('tematica')}}">Temática</a>
          </div>
        </li>

        <li class="card">
          <div class="contenido">
            <h3>TRIMESTRE</h3>
              <a href="{{ url('trimestre')}}">Trimestre</a>
          </div>
        </li>

    </div>
  </main> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</body>
</html>