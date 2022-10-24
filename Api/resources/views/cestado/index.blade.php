<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados</title>
</head>
<body>
    <div>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($estados as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->nomEstado}} </td>
                        <td>
                            <a href="{{url('/estados/'.$e->id.'/edit')}}">
                                <button>Editar</button>
                            </a> 
                        </td>
                        <br>
                        <td>
                            <form action="{{url('/estados/'.$e->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </div>
        </table>
    </div>
</body>
</html>