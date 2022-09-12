<form action="{{ url('/tematica/'.$tematica->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

<div>
    <label for="nombreTematica">Nombre</label>
    <input type="text" name="nombreTematica" id="nombreTematica" value="{{ isset($tematica-> nombreTematica)?$tematica-> nombreTematica: '' }}">
</div>

<div>
    <label for="id_instructor">
        Instructor
    </label>
    <select 
        name="id_instructor" 
        id="id_instructor" 
        value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
            @foreach($instructors as $instu)
                <option value="{{ $instu['id'] }}">
                    {{ $instu['nombreInst'] }}
                </option>
            @endforeach
    </select>
</div>

<div>
    <label for="id_programa">
        Programa
    </label>
    <select 
        name="id_programa" 
        id="id_programa" 
        value="{{ isset($tematica-> id_programa)?$tematica-> id_programa: '' }}">
            @foreach ($programas as $pro)
                <option value="{{ $pro['id'] }}">
                    {{ $pro['nombrePrograma'] }}
                </option>
            @endforeach
    </select>
</div>

<div>
    <label for="id_ficha">
        Fichas
    </label>
    <select 
        name="id_ficha" 
        id="id_ficha" 
        value="{{ isset($tematica-> id_ficha)?$tematica-> id_ficha: '' }}">
            @foreach ($fichas as $ficha)
                <option value="{{ $ficha['id'] }}">
                    {{ $ficha['numFicha'] }}
                </option>
            @endforeach
    </select>
</div>

    <input type="submit" value="Guardar">

</form>