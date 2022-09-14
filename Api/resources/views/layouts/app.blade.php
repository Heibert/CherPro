<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="login-nav">
        <ul>
            @if(auth()->check())

                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ route('login.destroy') }}">Cerrar Sesion</a>
                </li>
            @else
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ route('login.index') }}">Iniciar sesión</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ route('register.index') }}">Registrarse</a>
                </li>

            @endif
           
        </ul>
    </nav>
    @yield('content')
</body>
</html>