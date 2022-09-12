<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas</title>
</head>
<body>

    <a href="{{ url('ficha/create') }}"> Registrar una ficha </a>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Numero de ficha</th>
                <th>Cantidad de aprendices</th>
                <th>Instructor Encargado</th>
                <th>Programa</th>
                <th>Ajustes</th>
            </tr>
        </thead>

        <tbody>
            @foreach($ficha as $f)
            <tr>
                <td>{{ $f->id }}</td>
                <td>{{ $f->numFicha }}</td>
                <td>{{ $f->cantAprendiz }}</td>
                <td>{{ $f->nombreInst}}</td>
                <td>{{ $f->programas->nombrePrograma}}</td>
                <td>

                    <a href="{{ url('/ficha/'.$f->id.'/edit') }}">  
                        Editar 
                    </a>
            
                    <form action="{{ url('/ficha/'.$f->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Estas seguro? lmao xD')" 
                        value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <br><br>
        <a href="{{ url('./')}}">Inicio</a>
        <br><br>
    </table>

</body>
</html>

