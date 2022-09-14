<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar coordinacion</title>
</head>
<body>
    <form action="{{ url('/coordinacion/'.$coordinacion->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('coordinacion') }}">Atras</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>
    <br>
        <center><br><br><br>
        <div class="border border-dark w-50 opacity-75" style="background-color: orangered ;">
        <form><br>
        @error('nomCoordinacion')
                <small>{{$message}}</small>
        @enderror
        <div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="nomCoordinacion">Coordinacion</label>
  </div>
  <input type="text" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="nomCoordinacion" id="nomCoordinacion" value="{{ isset($coordinacion-> nomCoordinacion)?$coordinacion-> nomCoordinacion: '' }}">
</div>
                <div>
            <button type="submit" class="btn btn-primary" value="Guardar">Guardar</button>
        </div><br>
            </center>
        </div></from>
</body>
</html>