<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar coordinador</title>
</head>
<body>
    <form action="{{ url ('/coordinador/'.$coordinador->id)}}" method="post">
    @csrf 
    {{ method_field('PATCH' )}}
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                <li class="login-nav-li">
                    <a class="login-nav-a" href="{{ url('coordinador') }}">Atras</a>
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
            <div>
                <label for="nomCoordinador">Nombre Coordinador</label>
                <div>
                    <input type="text" name="nomCoordinador" id="nomCoordinador" value="{{ isset($coordinador->nomCoordinador)?$coordinador->nomCoordinador:''}}">
                </div>
                @error('nomCoordinador')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="apeCoordinador">Apellido Coordinador</label>
                <div>
                    <input type="text" name="apeCoordinador" id="apeCoordinador" value="{{ isset($coordinador->apeCoordinador)?$coordinador->apeCoordinador:''}}" >
                </div>
                @error('apeCoordinador')
                        <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="tipoDoc">Tipo de documento</label>
                <div>
                    <select name="tipoDoc" id="tipoDoc" value="{{ isset($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}">
                        <option name="tipoDoc" value="CC">CC</option>
                        <option name="tipoDoc" value="CI">CI</option>
                    </select>
                </div>
                @error('tipoDoc')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="numDoc">Número de documento</label>
                <div>
                    <input type="number" name="numDoc" id="numDoc" value="{{  isset($coordinador->numDoc)?$coordinador->numDoc:''}}">
                </div>
                @error('numDoc')
                    <small>{{$message}}</small>
                @enderror   
            </div>
            <br>
            <div>  
                <label for="correoMisena">Correo Misena</label>
                <div>
                    <input type="email" name="correoMisena" id="correoMisena" value="{{ isset($coordinador->correoMisena)?$coordinador->correoMisena:''}}">
                </div>
                @error('correoMisena')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="telefonoCoordinador">Telefono</label>
                <div>
                    <input type="number" name="telefonoCoordinador" id="telefonoCoordinador" value="{{ isset($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' }}">      
                </div>
                @error('telefonoCoordinador')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_coordinacion"> Coordinación </label>
                <div>
                    <select name="id_coordinacion" id="id_coordinacion" value="{{ isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: ''}}">
                        @foreach ($coordinacion as $coordinacion)
                            <option value="{{ $coordinacion['id'] }}">
                                {{ $coordinacion['nomCoordinacion'] }}
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
            <button type="submit" class="btn btn-primary" value="Guardar">Guardar</button>
            </div>
            </center>
        </div>
    </form>
</body>
</html>



