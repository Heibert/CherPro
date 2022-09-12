<div>
    <label for="numTrimestre">Numero</label>
    <input type="text" name="numTrimestre" id="numTrimestre"><br>
</div>

<div>
    <label for="id_ficha">Ficha</label>
    <select 
    name="id_ficha" 
    id="id_ficha" 
    value="{{ isset($trimestre-> id_ficha)?$trimestre-> id_ficha: '' }}">
        @foreach ($fichas as $ficha)
            <option value="{{ $ficha['id'] }}">
                {{ $ficha['numFicha'] }}
            </option>
        @endforeach
</select>
</div>

    <input type="submit" value="Guardar">