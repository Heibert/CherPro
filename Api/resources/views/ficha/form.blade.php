<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear ficha</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('ficha') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('ficha/create') }}"> Crear </a>
            </li>
        </div>
    </nav>
    <br>
    <div>
        <center>
        <div>
            <label for="numFicha"> Numero de ficha </label>
            <div>
                <input type="number" name="numFicha" id="numFicha" value="{{ isset($ficha-> numFicha)?$ficha-> numFicha: '' }}">
            </div>
            @error('numFicha')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="cantAprendiz"> Cantidad de aprendices </label>
            <div>
                <input type="number" name="cantAprendiz" id="cantAprendiz" value="{{ isset($ficha-> cantAprendiz)?$ficha-> cantAprendiz: '' }}">
            </div>
            @error('cantAprendiz')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_instructor"> Instructor encargado </label>
            <div>
                <select name="id_instructor" id="id_instructor" value="{{ isset($ficha-> id_instructor)?$ficha-> id_instructor: '' }}">
                    @foreach ($instructors as $instructor)
                        <option value="{{ $instructor['id'] }}">
                            {{ $instructor['nombreInst'] }}
                        </option>
                    @endforeach
                </select> 
            </div>
            @error('id_instructor')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programa </label>
            <div>
                <select name="id_programa" id="id_programa" value="{{ isset($ficha-> id_programa)?$ficha-> id_programa: '' }}">
                    @foreach ($programas as $pa)
                        <option value="{{ $pa['id'] }}">
                            {{ $pa['nombrePrograma'] }}
                        </option>
                    @endforeach
                </select> 
            </div>
            @error('id_programa')
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

