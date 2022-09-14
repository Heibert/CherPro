<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Reportes</title>
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('reporte/create') }}">Crear</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>
    <br><br>
    <table class="table table-light">
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Coordinador</th>
            <th>Instructor</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($reporte as $repor)
            <tr>
                <td>{{$repor->id}}</td>
                <td>{{$repor->fechaReporte}}</td>
                <td>{{$repor->descReporte}}</td>
                <td>{{$repor->coordinadores->nomCoordinador}}</td>
                <td>{{$repor->instructores->nombreInst}}</td>
                <td>
                    <a href="{{url('/reporte/'.$repor->id.'/edit')}}">
                        <button class="btn btn-outline-warning">Editar</button>
                    </a> 
                </td>
                <br>
                <td>
                    <form action="{{url('/reporte/'.$repor->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>