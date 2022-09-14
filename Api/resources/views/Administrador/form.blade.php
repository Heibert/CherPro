<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crear administrador</title>
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('administrador') }}">Atras</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
</nav><br><br>
    <br>
    <div>
        <center>
        <div>
            <label for="name">Nombre</label>
            <div>
                <input type="text" name="name" id="name" value="{{ isset($administradors-> name)?$administradors-> name: '' }}">
            </div>
            @error('name') 
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="apellido">Apellido</label>
            <div>
                <input type="text" name="apellido" id="apellido" value="{{ isset($administradors-> apellido)?$administradors-> apellido: '' }}">
            </div>
            @error('apellido')
                    <small>{{$message}}</small>
            @enderror      
        </div>
        <br>
        <div>
            <label for="telefono">Telefono</label>
            <div>
                <input type="text" name="telefono" id="telefono" value="{{ isset($administradors-> telefono)?$administradors-> telefono: '' }}">
            </div>      
            @error('telefono')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="email">Correo</label>
            <div>
                <input type="text" name="email" id="email" value="{{ isset($administradors-> email)?$administradors-> email: '' }}">
            </div>
            @error('email')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programas </label>
            <div>
                <select name="id_programa" id="id_programa" value="{{ isset($administradors-> id_programa)?$administradors-> id_programa: '' }}">
                        @foreach ($programa as $p)
                            <option value="{{ $p['id'] }}">
                                {{ $p['nombrePrograma'] }}
                            </option>
                        @endforeach
                </select>
                @error('id_programa')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>
        <br>
        <div>
            <input type="submit" value="Guardar">
        </div>
        </center>
    </div>
</body>
</html>


