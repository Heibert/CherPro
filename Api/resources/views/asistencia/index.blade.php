<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
</head>
<body>
    <nav>
        <h2><a href="asistencia/create">Registrar </a></h2>
    </nav>
    <table>
    <tr>
        <th>Idasistencia</th>
        <th>Fecha</th>
        <th>IdAprendiz</th>
        <th>idTematica</th>
    </tr>
    @foreach ($asistencias as $asistencia)
    <tr>
        <td>{{$asistencia->id}}</td>
        <td>{{$asistencia->fechaAsistencia}}</td>
        <td>{{$asistencia->idAprendiz}}</td>
        <td>{{$asistencia->idTematica}}</td>
        <td>
            <form action="{{ route('asistencia.destroy', $asistencia->id) }}" method ="POST" >
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Eliminar">
            </form>
        </td>
        <td>
            <form action="{{ route('asistencia.edit', $asistencia->id) }}" method ="GET" >
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