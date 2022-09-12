<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar trimestre</title>
</head>
<body>
    <form action="{{url('/trimestre/'.$trimestres->id)}}" method="post">
        @csrf
        {{ method_field('PATCH')}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('trimestre') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('trimestre/create') }}"> Crear </a>
                </li>
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
                <input type="submit" value="Guardar">
            </div>
            </center>
        </div>
    </form>
</body>
</html>