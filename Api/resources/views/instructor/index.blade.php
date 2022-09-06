Aqui va la lista

<a href="{{ url('instructor/create') }}">
    Registrar nuevo Instructor ><
</a> 

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo de documento</th>
            <th>Número de documento</th>
            <th>Correo Misena</th>
            <th>Telefono</th>
            <th>Tematica</th>
            <th>Programa</th>
            <th>Ajustes</th>
        </tr>
    </thead>

    <tbody>
        @foreach($instructor as $i)
        <tr>
            <td>{{ $i-> id}}</td>
            <td>{{ $i-> nombreInst}}</td>
            <td>{{ $i-> apellidoInst}}</td>
            <td>{{ $i-> tipoDoc}}</td>
            <td>{{ $i-> numDoc}}</td>
            <td>{{ $i-> correoMisena}}</td>
            <td>{{ $i-> telefonoInst}}</td>
            <td>{{ $i-> idTematica}}</td>
            <td>{{ $i-> idPrograma}}</td>
            <td>
                <a href="{{ url('/instructor/'.$i->id.'/edit') }}">
                    Editar
                </a>

                <form action="{{ url('/instructor/'.$i->id) }}" method="post">
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
    <a href="{{ url('./') }}">Regresar</a>
    <br><br>
</table>