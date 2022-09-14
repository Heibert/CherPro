<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear tematica</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('./index') }}">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('tematica/create') }}"> Crear </a>
                <a class="nav-link" href="{{ url('tematica/index') }}"> Lista </a>
            </li>
    </nav>
    <br>
    <div>
        <center>
        <div>
            <label for="nombreTematica">Nombre</label>
                <div>
                    <input type="text" name="nombreTematica" id="nombreTematica" value="{{ isset($tematica-> nombreTematica)?$tematica-> nombreTematica: '' }}"><br>
                </div>
                @error('nombreTematica') 
                    <small> {{$message}} </small> 
                @enderror
        </div>
        <br>
        <div>
            <label for="id_instructor"> Instructor </label>
            <div>
                <select name="id_instructor" id="id_instructor" value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
                    @foreach($instructors as $instu)
                        <option value="{{ $instu['id'] }}">
                            {{ $instu['nombreInst'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('id_instructor') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programa </label>
            <div>
                <select name="id_programa" id="id_programa" value="{{ isset($tematica-> id_programa)?$tematica-> id_programa: '' }}">
                    @foreach ($programas as $pro)
                        <option value="{{ $pro['id'] }}">
                            {{ $pro['nombrePrograma'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('id_programa') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="id_ficha"> Fichas </label>
            <div>
                <select name="id_ficha" id="id_ficha" value="{{ isset($tematica-> id_ficha)?$tematica-> id_ficha: '' }}">
                    @foreach ($fichas as $ficha)
                        <option value="{{ $ficha['id'] }}">
                            {{ $ficha['numFicha'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('id_ficha') 
                <small> {{$message}} </small> 
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