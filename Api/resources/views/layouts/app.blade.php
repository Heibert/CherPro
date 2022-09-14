<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
</head>
<body>

<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ route('login.index') }}">Iniciar sesión</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ route('register.index') }}">Registrarse</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>
    @yield('content')
</body>
</html>