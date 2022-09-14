<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar trimestre</title>
</head>
<body>
    <form action="{{url('/trimestre/'.$trimestres->id)}}" method="post">
        @csrf
        {{ method_field('PATCH')}}
        <nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('trimestre') }}">Atras</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>
        <br>
        <div>
            <center>
            <div>
                <label for="numTrimestre">Numero</label>
                <div>
                    <input type="text" name="numTrimestre" id="numTrimestre" value="{{ isset($trimestre-> numTrimestre)?$trimestre-> numTrimestre: '' }}"><br>
                </div>
                @error('numTrimestre')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_ficha">Ficha</label>
                <div>
                    <select name="id_ficha" id="id_ficha" value="{{ isset($trimestre-> id_ficha)?$trimestre-> id_ficha: '' }}">
                        @foreach ($fichas as $ficha)
                            <option value="{{ $ficha['id'] }}">
                                {{ $ficha['numFicha'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('id_ficha')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_tematica"> Tematica </label>
                <div>
                    <select name="id_tematica" id="id_tematica" value="{{ isset($trimestre-> id_tematica)?$trimestre-> id_tematica: '' }}">
                        @foreach ($tematica as $tema)
                            <option value="{{ $tema['id'] }}">
                                {{ $tema['nombreTematica'] }}
                            </option>
                        @endforeach
                    </select> 
                </div>
            </div>
            <br>
            <div>
                <input type="submit" value="Guardar">
            </div>
            </center>
        </div>
    </form>
</body>
</html>