Mostrar lista de fichas

<a href="{{ url('ficha/create') }}"> Registrar una ficha </a>

@if(Session::has('mensaje'))
   {{session::get('mensaje')}}
@endif

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
            <td>{{ $f->instructors}}</td>
            <td>{{ $f->idPrograma }}</td>
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
