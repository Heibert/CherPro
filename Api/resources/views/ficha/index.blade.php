<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fichas</title>
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
                <a class="nav-link" href="{{ url('ficha/create') }}"> Crear </a>
                <a class="nav-link" href="{{ url('ficha/index') }}"> Lista </a>
            </li>
        </div>
    </nav>
    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Numero de ficha</th>
                <th>Cantidad de aprendices</th>
                <th>Instructor Encargado</th>
                <th>Programa</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ficha as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td>{{ $f->numFicha }}</td>
                <td>{{ $f->cantAprendiz }}</td>
                <td>{{ $f->id_instructor}}</td>
                <td>{{ $f->programas->nombrePrograma}}</td>
                <td>
                    <a href="{{url('/ficha/'.$f->id.'/edit')}}">
                        <button class="btn btn-outline-warning">Editar</button>
                    </a> 
                </td>
                <br>
                <td>
                    <form action="{{url('/ficha/'.$f->id)}}" method="post">
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

