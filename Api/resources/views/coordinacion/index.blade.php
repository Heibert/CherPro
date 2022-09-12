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
        <h2><a href="coordinacion/create">Registrar</a></h2>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre de la coordinacion</th>
        </tr>
        @foreach ($coordinacion as $coordi)
        <tr>
            <td>{{$coordi->id}}</td>
            <td>{{$coordi->nomCoordinacion}}</td>
            <td>
                <a href="{{ url('/coordinacion/'.$coordi->id.'/edit') }}"> Editar </a>
                <br>
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Estas seguro?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <button type="submit">
        <a href="{{ url('/')}}">Regresar</a>
    </button>
</body>
</html>