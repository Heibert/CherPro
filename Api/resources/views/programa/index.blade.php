<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excusa</title>
</head>
<body>
    @if(Session::has('mensaje'))
    {{session::get('mensaje')}}
    @endif

    <a href="{{ url('programa/create')}}">Nuevo Programa</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Coordinacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programa as $pro)
            <tr>
                <td>{{ $pro->id }}</td>
                <td>{{ $pro->nombrePrograma }}</td>
                <td>{{ $pro->coordinacions->nomCoordinacion }}</td>
                <td>
                    <a href="{{ url('/programa/'.$pro->id.'/edit') }}">Editar</a>
                </td>
                <td>
                <form action="{{ url('/programa/'.$pro->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar este campo?')" value="Borrar">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit">
        <a href="{{ url('/')}}">Regresar</a>
    </button>
    
</body>
</html>