<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar coordinador</title>
</head>
<body>
    <form action="{{ url ('/coordinador/'.$coordinador->id)}}" method="post">
    @csrf 
    {{ method_field('PATCH' )}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('./index') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('coordinador/create') }}"> Crear </a>
                    <a class="nav-link" href="{{ url('coordinador/index') }}"> Lista </a>
                </li>
            </div>
        </nav>
        <br>
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
                <input type="submit" value="Guardar">
            </div>
            </center>
        </div>
    </form>
</body>
</html>



