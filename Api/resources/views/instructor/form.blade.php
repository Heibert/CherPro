<center>

<label for="nombreInst"> 
    Nombre del Instructor 
</label>
    <input type="text" 
           name="nombreInst" 
           id="nombreInst"
           value="{{ isset($instructor-> nombreInst)?$instructor-> nombreInst: '' }}">

    @error('nombreInst')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="apellidoInst"> 
    Apellido del Instructor 
</label>
    <input type="text" 
           name="apellidoInst" 
           id="apellidoInst"
           value="{{ isset($instructor-> apellidoInst)?$instructor-> apellidoInst: '' }}">
           
    @error('apellidoInst')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="tipoDoc"> 
    Tipo de documento 
</label>
    <input type="text" 
           name="tipoDoc" 
           id="tipoDoc"
           value="{{ isset($instructor-> tipoDoc)?$instructor-> tipoDoc: '' }}">

    @error('tipoDoc')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="numDoc"> 
    Número de documento 
</label>
    <input type="number" 
           name="numDoc" 
           id="numDoc"
           value="{{ isset($instructor-> numDoc)?$instructor-> numDoc: '' }}">
    
    @error('numDoc')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="correoMisena"> 
    Correo Misena 
</label>
    <input type="text" 
           name="correoMisena" 
           id="correoMisena"
           value="{{ isset($instructor-> correoMisena)?$instructor-> correoMisena: '' }}">

    @error('correoMisena')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="telefonoInst"> 
    Telefono
</label>
    <input type="text" 
           name="telefonoInst" 
           id="telefonoInst"
           value="{{ isset($instructor-> telefonoInst)?$instructor-> telefonoInst: '' }}">

    @error('telefonoInst')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<label for="idTematica"> 
    Tematica
</label>
    <input type="number" 
           name="idTematica" 
           id="idTematica"
           value="{{ isset($instructor-> idTematica)?$instructor-> idTematica: '' }}">

    @error('idTematica')
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
           id="idPrograma"
           value="{{ isset($instructor-> idPrograma)?$instructor-> idPrograma: '' }}">
    
    @error('idPrograma')
        <br>
            <small>{{$message}}</small>
        <br>
    @enderror
        <br>
<br><br>

<input type="submit" value="Guardar">
<br><br>

<a href="{{ url('./') }}">Regresar</a>

</center>
