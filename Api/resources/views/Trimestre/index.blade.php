<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Numero Trimestre</th>
            <th>Ficha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trimestre as $tr)
        <tr>
            <td>{{$tr->id}}</td>
            <td>{{$tr->numTrimestre}}</</td>
            <td>{{$tr->fichas->numFicha}}</</td>
            <td>
            <a href="{{url('/trimestre/'.$tr->id.'/edit')}}">
                <button>Editar</button>
            </a> 
            <form action="{{url('/trimestre/'.$tr->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>