<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <title>Administradores</title>
</head>
<body>
    <nav>
        <a href="{{ url('administrador/create') }}"> Crear administrador </a>
    </nav>
    <br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Programa</th>
                    <th>Contraseña</th>
                </tr>
            </thead>

            <tbody>
                @foreach($administrador as $ad)
                <tr>
                    <td>{{$ad->id}}</td>
                    <td>{{$ad->name}}</td>
                    <td>{{$ad->apellido}}</td>
                    <td>{{$ad->telefono}}</td>
                    <td>{{$ad->email}}</td>
                    <td>{{$ad->programa}}</td>
                    <td>{{$ad->password}}</td>

                    <td>
                    <a href="{{url('/administrador/'.$ad->id.'/edit')}}">
                        <button>Editar</button>
                    </a> 
                    <form action="{{url('/administrador/'.$ad->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>

