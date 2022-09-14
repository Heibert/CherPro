<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crea excusa</title>
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('excusa') }}">Atras</a>
                </li>
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('index') }}">Salir</a>
                </li>
        </ul>
                </div>
            </div>
    </nav>
    <br><br>
    <div>
        <center>
        <h3>Enviar excusa</h3>
        <form action="{{ route('enviar.store') }}">
            <div>
                <label for="text">Destinatario</label>
                <div>
                    <input type="text">
                </div>
            </div>
            <br>
            <div>
                <label for="fechaExcusa"> Fecha </label>
                    <div>
                        <input type="date" value="{{ isset ($excusa->fechaExcusa)?$excusa->fechaExcusa:''}}" name="fechaExcusa" id="fechaExcusa">
                    </div>
                    @error('fechaExcusa') 
                        <small>{{$message}}</small>
                    @enderror
                </div>
            <br>
            <div>
                <label for="descExcusa" class="form-label">Asunto</label>
                    <div>
                        <textarea value="{{ isset ($excusa->descExcusa)?$excusa->descExcusa:''}}" name="descExcusa" id="descExcusa"></textarea>
                    </div>
                    @error('descExcusa') 
                        <small>{{$message}}</small>
                    @enderror
            </div>
            <br>
            <div>
                <label for="archivo"> Adjuntar validacion de la excusa</label>
                    <div>
                        <input type="file" value="{{ isset($excusa->archivo)?$excusa->archivo:''}}" name="archivo" id="archivo">
                    </div>
                    @error('archivo') 
                        <small>{{$message}}</small>
                    @enderror
            </div>
            <br>
            <div>
                <input type="submit" value="Enviar mensaje">
            </div>
        </form>
        </center> 
    </div>
    @if(session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif 
</body>
</html>