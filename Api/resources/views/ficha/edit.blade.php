<form action="{{ url('/ficha/'.$ficha->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

<center>

<label for="numFicha"> 
    Numero de ficha 
</label>
    <input type="number" 
            name="numFicha" 
            value="{{ isset($ficha-> numFicha)?$ficha-> numFicha: '' }}" 
            id="numFicha">
<br><br>

<label for="cantAprendiz"> 
    Cantidad de aprendices 
</label>
    <input type="number" 
            name="cantAprendiz" 
            value="{{ isset($ficha-> cantAprendiz)?$ficha-> cantAprendiz: '' }}" 
            id="cantAprendiz">
<br><br>

<label for="id_instructor"> 
    Instructor encargado 
</label>
<select
    name="id_instructor" 
    id="id_instructor"
    value="{{ isset($ficha-> id_instructor)?$ficha-> id_instructor: '' }}">
        @foreach ($instructors as $instructor)
            <option value="{{ $instructor['id'] }}">
                {{ $instructor['nombreInst'] }}
            </option>
        @endforeach
</select> 
<br><br>

<label for="idPrograma"> 
    Programa 
</label>
    <input type="number" 
            name="idPrograma" 
            value="{{ isset($ficha-> idPrograma)?$ficha-> idPrograma: '' }}" 
            id="idPrograma">
<br><br>

    <input 
        type="submit" 
        value="Guardar">
<br><br>

<a href="{{ url('ficha/') }}">
    Regresar
</a>

</center>