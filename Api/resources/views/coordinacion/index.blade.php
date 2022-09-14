<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Coordinaciones</title>
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('coordinacion/create') }}">Crear</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
</nav>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </tr>
        </thead>

        <tbody>
            @foreach ($coordinacion as $coordi)
            <tr>
                <td>{{$coordi->id}}</td>
                <td>{{$coordi->nomCoordinacion}}</td>
                <td>
                    <a href="{{url('/coordinacion/'.$coordi->id.'/edit')}}">
                        <button class="btn btn-outline-warning">Editar</button>
                    </a> 
                </td>
                <br>
                <td>
                    <form action="{{url('/coordinacion/'.$coordi->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>