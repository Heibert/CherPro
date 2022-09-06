<center>

<label for="numFicha"> 
    Numero de ficha 
</label>
    <input type="number" 
            name="numFicha" 
            value="{{ isset($ficha-> numFicha)?$ficha-> numFicha: '' }}" 
            id="numFicha">

    @error('numFicha')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="cantAprendiz"> 
    Cantidad de aprendices 
</label>
    <input type="number" 
            name="cantAprendiz" 
            value="{{ isset($ficha-> cantAprendiz)?$ficha-> cantAprendiz: '' }}" 
            id="cantAprendiz">

    @error('cantAprendiz')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
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

    @error('id_instructor')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="idPrograma"> 
    Programa 
</label>
    <input type="number" 
            name="idPrograma" 
            value="{{ isset($ficha-> idPrograma)?$ficha-> idPrograma: '' }}" 
            id="idPrograma">

    @error('idPrograma')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

    <input 
        type="submit" 
        value="Guardar">
<br><br>

<a href="{{ url('./') }}">
    Regresar
</a>

</center>