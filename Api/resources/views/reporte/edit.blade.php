<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar reporte</title>
</head>
<body>
    <div>
        <center>
        <form action="{{ url('/reporte/'.$reporte->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('reporte') }}">Atras</a>
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
                <div>
                    <label for="fechaReporte">Fecha</label>
                    <div>
                        <input type="date" name="fechaReporte" id="fechaReporte" value="{{ isset ($reporte->fechaReporte)?$reporte->fechaReporte:''}}">
                    </div>
                    @error('fechaReporte') 
                        <small>{{$message}}</small>
                    @enderror
                </div>
                <br>
                <div>
                    <label for="descReporte">Descripcion</label>
                    <div>
                        <textarea value="{{ isset ($reporte->descReporte)?$reporte->descReporte:''}}" name="descReporte" id="descReporte"></textarea>            
                    </div>
                    @error('descReporte') 
                        <small>{{$message}}</small>
                    @enderror 
                </div>
                <br>
                <div>
                    <label for="id_coordinador">Coordinador</label>
                    <div>
                        <select name="id_coordinador" id="id_coordinador" value="{{ isset ($reporte->id_coordinador)?$reporte->id_coordinador:''}}">
                            @foreach ($coordi as $coor)
                                <option value="{{ $coor['id'] }}">
                                    {{ $coor['nomCoordinador'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_coordinador') 
                            <small>{{$message}}</small>
                        @enderror 
                    </div>
                </div>
                <br>
                <div>
                    <label for="id_instructor">Instructor</label>
                    <div>
                        <select name="id_instructor" id="id_instructor" value="{{ isset ($reporte->id_instructor)?$reporte->id_instructor:''}}">
                            @foreach ($inst as $int)
                                <option value="{{ $int['id'] }}">
                                    {{ $int['nombreInst'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_instructor') 
                            <small>{{$message}}</small>
                        @enderror 
                    </div>
                </div>
                <br>
                <div>
                    <input type="submit" value="Enviar mensaje">
                </div>
            </div>
        </form>
        </center>
    </div>
</body>
</html>