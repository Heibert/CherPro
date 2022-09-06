<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"><br>

    <label for="Apellido">Apellido</label>
    <input type="text" name="Apellido" id="Apellido"><br>

    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo"><br>

    <label for="Telefono">Telefono</label>
    <input type="text" name="Telefono" id="Telefono"><br>

    <label for="id_programa">
        Programas
    </label>
    <select 
    name="id_programa" 
    id="id_programa" 
    value="{{ isset($administradors-> id_programa)?$administradors-> id_programa: '' }}">
        @foreach ($programas as $p)
            <option value="{{ $p['id'] }}">
                {{ $programa['nombrePrograma'] }}
            </option>
        @endforeach
</select>

    <input type="submit" value="Guardar">