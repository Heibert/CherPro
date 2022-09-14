<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Coordinadores</title>
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
                <a class="nav-link" href="{{ url('coordinador/create') }}"> Crear </a>
                <a class="nav-link" href="{{ url('coordinador/index') }}"> Lista </a>
            </li>
        </div>
    </nav>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo de documento</th>
                    <th>Número de documento</th>
                    <th>Correo Misena</th>
                    <th>Telefono</th>
                    <th>Nombre coordinación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @foreach($coordinadors as $coordinador)
                <tr>
                    <td>{{ $coordinador->id }}</td>
                    <td>{{ $coordinador->nomCoordinador }}</td>
                    <td>{{ $coordinador->apeCoordinador }}</td>
                    <td>{{ $coordinador->tipoDoc }}</td>
                    <td>{{ $coordinador->numDoc }}</td>
                    <td>{{ $coordinador->correoMisena }}</td>
                    <td>{{ $coordinador->telefonoCoordinador }}</td>
                    <td>{{ $coordinador->coordinacions->nomCoordinacion}}</td>
                    <td>
                        <a href="{{url('/coordinador/'.$coordinador->id.'/edit')}}">
                            <button class="btn btn-outline-warning">Editar</button>
                        </a> 
                    </td>
                    <br>
                    <td>
                        <form action="{{url('/coordinador/'.$coordinador->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>