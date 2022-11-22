<div>
<table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Contraseña confirmada</th>
                <th>Rol</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name}} </td>
                <td>{{ $u->apellido}}</td>
                <td>{{ $u->telefono}}</td >
                <td>{{ $u->email}}</td>
                <td>{{ $u->password}}</td>
                <td>{{ $u->password_confirmation}}</td>
                <td>{{ $u->rol}}</td>
                <br>
                <td>
                    <form action="{{url('/user/'.$u->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>