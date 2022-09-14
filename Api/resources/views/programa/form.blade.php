<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crear programa</title>
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('programa') }}">Atras</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>
    <br>
    <div><br>
        <center>
        <div>
            <label for="nombrePrograma">Nombre del programa</label>
            <div>
                <input type="text" name="nombrePrograma" id="nombrePrograma" value="{{ isset($programa->nombrePrograma)?$programa->nombrePrograma:''}}">
            </div>
            @error('nombrePrograma')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_coordinacion"> Coordinacion </label>
            <div>
                <select name="id_coordinacion" id="id_coordinacion" value="{{ isset($programa-> id_coordinacion)?$programa-> id_coordinacion: '' }}">
                    @foreach ($coordinacion as $coor)
                        <option value="{{ $coor['id'] }}">
                            {{ $coor['nomCoordinacion'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('id_coordinacion')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <input type="submit" value="Guardar">
        </div>
        </center>
    </div>
</body>
</html>