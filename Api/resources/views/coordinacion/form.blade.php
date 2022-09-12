<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear coordinacion</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('coordinacion') }}">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('coordinacion/create') }}"> Crear </a>
            </li>
        </div>
    </nav>
    <br>
        <div>
            <center>
                <div>
                    <label for="nomCoordinacion">Coordinacion</label>
                    <div>
                        <input type="text" name="nomCoordinacion" id="nomCoordinacion" value="{{ isset($coordinacion-> nomCoordinacion)?$coordinacion-> nomCoordinacion: '' }}">
                    </div>
                    @error('nomCoordinacion')
                        <small>{{$message}}</small>
                    @enderror
                </div>
                <br>
                <div>
                    <input type="submit" method="Guardar">
                </div>
            </center>
        </div>
</body>
</html>