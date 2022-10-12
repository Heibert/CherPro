<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<nav class="navbar text-uppercase navbar-expand-md shadow p-13 mb-15 bg-body rounded bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="{{ url('img/Logo.png')}}" class="d-inline-block align-top" alt="logo">
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
      @if(auth()->check())
        <li class="nav-item">

//Ronald
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ route('login.index') }}"><i class="bi bi-person"> Iniciar sesión</i></a>
//Master no supe cual dejar asi que deje ambos
          <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ route('login.destroy') }}"><i class="bi bi-box-arrow-left"> Cerra Sesión</i></a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ route('login.index') }}"><i class="bi bi-person"> Iniciar Sesión</i></a>
//Aqui termina master
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ route('register.index') }}"><i class="bi bi-person-plus"> Registrarse</i></a>
        </li>
        @endif
    </ul>
    </div>
  </div>
</nav>

    @yield('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</body>
</html>