<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinador</title>
</head>
<body>
    @if(Session::has('mensaje'))
    {{session::get('mensaje')}}
    @endif

    <a href="{{ url('coordinador/create')}}">Nuevo Coordinador</a>
    <table  border="1">
        <thead>
            <tr>
                <th>ID</th>
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
                <a href="{{ url('/coordinador/'.$coordinador->id.'/edit') }}">Editar</a>
                </td>
                <td>
                <form action="{{ url('/coordinador/'.$coordinador->id) }}" method="post">
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