<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Id Programa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($administradores as $administrador)
        <tr>
            <td>{{$administrador->id}}</td>
            <td>{{$administrador->Nombre}}</</td>
            <td>{{$administrador->Apellido}}</</td>
            <td>{{$administrador->Correo}}</</td>
            <td>{{$administrador->Telefono}}</</td>
            <td>{{$administrador->idPrograma}}</</td>
            <td>
            <a href="{{url('/administrador/'.$administrador->id.'/edit')}}">
                <button>Editar</button>
            </a> 
            <form action="{{url('/administrador/'.$administrador->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>