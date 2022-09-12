<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendices</title>
</head>
<body>
    <nav>
        <a href="{{ url('aprendiz/create') }}"> Registrar nuevo aprendiz </a>
    </nav>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de documento</th>
                <th>Número de documento</th>
                <th>Correo Misena</th>
                <th>Correo Personal</th>
                <th>Telefono</th>
                <th>Ficha</th>
                <th>Contraseña</th>
                <th>Ajustes</th>
            </tr>
        </thead>

        <tbody>
            @foreach($aprendiz as $a)
            <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->nombreAprend}} </td>
                <td>{{ $a->apelliAprend}}</td>
                <td>{{ $a->tipoDoc}}</td>
                <td>{{ $a->numDoc}}</td>
                <td>{{ $a->correoMisena}}</td>
                <td>{{ $a->correoAprend}}</td>
                <td>{{ $a->telefonoAprend}}</td>
                <td>{{ $a->fichas->numFicha}}</td>
                <td>{{ $a->password}}</td>
                <td>
                    <a href="{{ url('/aprendiz/'.$a->id.'/edit') }}"> Editar </a>
                    <br>
                    <form action="{{ url('/aprendiz/'.$a->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Estas seguro?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

        <a href="{{ url('./')}}">Inicio</a>
        
        <br><br>

    </table>
</body>
</html>

