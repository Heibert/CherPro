<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
</head>
<body>
    <nav>
        <h2><a href="reporte/create">Registrar </a></h2>
    </nav>
    <table>
    <tr>
        <th>IdReporte</th>
        <th>IdInstructor</th>
        <th>IdCoordinador</th>
        <th>Fecha</th>
    </tr>
    @foreach ($reportes as $reporte)
    <tr>
        <td>{{$reporte->id}}</td>
        <td>{{$reporte->idInstructor}}</td>
        <td>{{$reporte->idCoordinador}}</td>
        <td>{{$reporte->fechaReporte}}</td>
        <td>
            <form action="{{ route('reporte.destroy', $reporte->id) }}" method ="POST" >
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Eliminar">
            </form>
        </td>
        <td>
            <form action="{{ route('reporte.edit', $reporte->id) }}" method ="GET" >
            @csrf
            <input type="submit" value="Editar">
            </form>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>