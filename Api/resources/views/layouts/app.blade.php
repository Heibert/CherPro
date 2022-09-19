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
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="{{ url('img/logo.png')}}" class="d-inline-block align-top" alt="logo">
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{ route('login.index') }}">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{ route('register.index') }}">Registrarse</a>
        </li>
    </ul>
    </div>
  </div>
</nav>
<!--
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav bg-dark">
            <div class="container">
            <img src="{{ url('img/logo.png')}}" class="d-inline-block align-top" alt="">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a nav-link text-white" href="{{ route('login.index') }}">Iniciar sesión</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a nav-link text-white" href="{{ route('register.index') }}">Registrarse</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>-->
    @yield('content')
</body>
</html>