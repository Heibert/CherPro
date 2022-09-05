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

    <a href="{{ url('excusa/create')}}">Nueva Excusa</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha Excusa</th>
                <th>Descripción Excusa</th>
                <th>Asistencia</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($excusas as $excusa)
            <tr>
                <td>{{ $excusa->id }}</td>
                <td>{{ $excusa->fechaExcusa }}</td>
                <td>{{ $excusa->descExcusa }}</td>
                <td>{{ $asistencia->idAsistencia }}</td>
                <td>
                <a href="{{ url('/excusa/'.$excusa->id.'/edit') }}">Editar</a>
                </td>
                <td>
                <form action="{{ url('/excusa/'.$excusa->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Quieres borrar este campo?')" value="Borrar">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>