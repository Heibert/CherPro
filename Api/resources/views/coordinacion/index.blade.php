<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinacions</title>
</head>
<body>
    <nav>
        <h2><a href="coordinacion/create">Registrar </a></h2>
    </nav>
    <table>
    <tr>
        <th>Idcoordinacion</th>
        <th>Nombre de la coordinacion</th>
        <th>IdPrograma</th>
    </tr>
    @foreach ($coordinacions as $coordinacion)
    <tr>
        <td>{{$coordinacion->id}}</td>
        <td>{{$coordinacion->nomCoordinacion}}</td>
        <td>{{$coordinacion->idPrograma}}</td>
        <td>
            <form action="{{ route('coordinacion.destroy', $coordinacion->id) }}" method ="POST" >
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Eliminar">
            </form>
        </td>
        <td>
            <form action="{{ route('coordinacion.edit', $coordinacion->id) }}" method ="GET" >
            @csrf
            <input type="submit" value="Editar">
            </form>
        </td>
    </tr>
    @endforeach
    </table>

    <button type="submit">
        <a href="{{ url('/')}}">Regresar</a>
    </button>
    
</body>
</html>