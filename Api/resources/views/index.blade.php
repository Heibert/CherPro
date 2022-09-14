<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencias</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" style="background-color: #008000;">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('tematica') }}">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('tematica/create') }}">Crear</a></li>
                    </ul>
                </div>
            </div>
    </nav>

    <div>
            <h2></h2>
                <li>
                    <a href="{{ url('coordinacion')}}">coordinacion</a>
                </li>
                <li>
                    <a href="{{ url('coordinador')}}">coordinador</a>
                </li>
                <li>
                    <a href="{{ url('excusa')}}">excusa</a>
                </li>
                <li>
                    <a href="{{ url('programa')}}">programa</a>
                </li>
                <li>
                    <a href="{{ url('reporte')}}">reporte</a>
                </li>
                <li>
                    <a href="{{ url('tematica')}}">tematica</a>
                </li>
                <li>
                    <a href="{{ url('trimestre')}}">trimestre</a>
                </li>
                <li>
                    <a href="{{ url('administrador')}}">administrador</a>
                </li>
                <li>
                    <a href="{{ url('asistencia')}}">asistencia</a>
                </li>
        </div>
</body>
</html>