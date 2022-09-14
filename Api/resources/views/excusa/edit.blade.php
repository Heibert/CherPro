<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar excusa</title>
</head>
<body>
    <form action="{{ url ('/excusa/'.$excusa->id)}}" method="post">
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
                <a class="nav-link" href="{{ url('excusa/create') }}"> Crear </a>
                <a class="nav-link" href="{{ url('excusa/index') }}"> Lista </a>
            </li>
        </div>
    </nav>
        <br>
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
            </center> 
        </div>
    </form>
</body>
</html>


</form>