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
        @foreach($administradors as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->Nombre}}</</td>
            <td>{{$a->Apellido}}</</td>
            <td>{{$a->Correo}}</</td>
            <td>{{$a->Telefono}}</</td>
            <td>{{$a->id_programa->nombrePrograma}}</</td>
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

<button type="submit">
        <a href="{{ url('/')}}">Regresar</a>
</button>