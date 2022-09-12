<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Id Instructor</th>
            <th>Id Programa</th>
            <th>Id Ficha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tematicas as $tematica)
        <tr>
            <td>{{$tematica->id}}</td>
            <td>{{$tematica->nombreTematica}}</</td>
            <td>{{$tematica->instructores->nombreInst}}</</td>
            <td>{{$tematica->programas->nombrePrograma}}</</td>
            <td>{{$tematica->fichas->numFicha}}</</td>
            <td>
            <a href="{{url('/tematica/'.$tematica->id.'/edit')}}">
                <button>Editar</button>
            </a> 
            <form action="{{url('/tematica/'.$tematica->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>