<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear programa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('programa') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('programa/create') }}"> Crear </a>
            </li>
        </div>
    </nav>
    <br>
    <div>
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