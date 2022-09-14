<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear reporte</title>
</head>
<body>
    <div>
        <center>
        <form method="POST" action="{{route('reporte.store')}}" enctype="multipart/form-data">
            @csrf
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{ url('reporte') }}">Inicio</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('reporte/create') }}"> Crear </a>
                        </li>
                </nav>
            </div>
            <br>
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
        </form>
        </center>
    </div>
</body>
</html>