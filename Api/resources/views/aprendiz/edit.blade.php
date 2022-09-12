<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Aprendiz</title>
</head>
<body>
    <form action="{{ url('/aprendiz/'.$aprendiz->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('aprendiz') }}">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('aprendiz/create') }}"> Crear </a>
                </li>
            </div>
        </nav>
        <br>
        <div>
            <center>
            <div>
                <label for="nombreAprend" > Nombre del Aprendiz </label>
                <div>
                    <input type="text" name="nombreAprend" id="nombreAprend" value="{{ isset($aprendiz-> nombreAprend)?$aprendiz-> nombreAprend: '' }}"> 
                </div>
                @error('nombreAprend') 
                    <small> {{$message}} </small> 
                @enderror
            </div>
            <br>
            <div>
                <label for="apelliAprend"> Apellido del Aprendiz </label>
                <div>
                    <input type="text" name="apelliAprend" id="apelliAprend" value="{{ isset($aprendiz-> apelliAprend)?$aprendiz-> apelliAprend: '' }}">
                </div>
                @error('apelliAprend') 
                    <small> {{$message}} </small>
                @enderror
            </div>
            <br>
            <div>
                <label for="tipoDoc"> Tipo de documento </label>
                <div>
                    <input type="text" name="tipoDoc"  id="tipoDoc" value="{{ isset($aprendiz-> tipoDoc)?$aprendiz-> tipoDoc: '' }}">
                </div>
                @error('tipoDoc')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="numDoc"> Número de documento </label>
                <div>
                    <input type="number" name="numDoc"  id="numDoc" value="{{ isset($aprendiz-> numDoc)?$aprendiz-> numDoc: '' }}">
                </div>
                @error('numDoc')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="correoMisena"> Correo Misena </label>
                <div>
                    <input type="text" name="correoMisena" id="correoMisena" value="{{ isset($aprendiz-> correoMisena)?$aprendiz-> correoMisena: '' }}">
                </div>
                @error('correoMisena')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="correoAprend"> Correo personal </label>
                <div>
                    <input type="text" name="correoAprend" id="correoAprend" value="{{ isset($aprendiz-> correoAprend)?$aprendiz-> correoAprend: '' }}">
                </div>
                @error('correoAprend')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="telefonoAprend"> Telefono </label>
                <div>
                    <input type="text" name="telefonoAprend" id="telefonoAprend" value="{{ isset($aprendiz-> telefonoAprend)?$aprendiz-> telefonoAprend: '' }}">
                </div>
                @error('telefonoAprend')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_ficha"> Fichas </label>
                <div>
                    <select name="id_ficha" id="id_ficha" value="{{ isset($aprendiz-> id_ficha)?$aprendiz-> id_ficha: '' }}">
                        @foreach ($fichas as $ficha)
                            <option value="{{ $ficha['id'] }}">
                                {{ $ficha['numFicha'] }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    @error('id_ficha')
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



