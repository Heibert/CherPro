<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar administrador</title>
</head>
<body>
    <form action="{{ url('/administrador/'.$administradors->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('administrador') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('administrador/create') }}"> Crear </a>
                </li>
            </div>
        </nav>
        <br>
        <div>
            <center>
            <div>
                <label for="name">Nombre</label>
                <div>
                    <input type="text" name="name" id="name" value="{{ isset($administradors-> name)?$administradors-> name: '' }}">
                </div>
                @error('name') 
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="apellido">Apellido</label>
                <div>
                    <input type="text" name="apellido" id="apellido" value="{{ isset($administradors-> apellido)?$administradors-> apellido: '' }}">
                </div>
                @error('apellido')
                        <small>{{$message}}</small>
                @enderror      
            </div>
            <br>
            <div>
                <label for="telefono">Telefono</label>
                <div>
                    <input type="text" name="telefono" id="telefono" value="{{ isset($administradors-> telefono)?$administradors-> telefono: '' }}">
                </div>      
                @error('telefono')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="email">Correo</label>
                <div>
                    <input type="text" name="email" id="email" value="{{ isset($administradors-> email)?$administradors-> email: '' }}">
                </div>
                @error('email')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_programa"> Programas </label>
                <div>
                    <select name="id_programa" id="id_programa" value="{{ isset($administradors-> id_programa)?$administradors-> id_programa: '' }}">
                            @foreach ($programa as $p)
                                <option value="{{ $p['id'] }}">
                                    {{ $p['nombrePrograma'] }}
                                </option>
                            @endforeach
                    </select>
                    @error('id_programa')
                        <small>{{$message}}</small>
                    @enderror
                </div>
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

