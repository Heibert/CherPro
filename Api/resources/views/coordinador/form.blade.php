<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
</head>
<body>
    <h1>{{ $modo }} Coordinador</h1>
            <label for="nomCoordinador">Nombre Coordinador</label><br>
            <input type="text" value="{{ old ('nomCoordinador', isset ($coordinador->nomCoordinador)?$coordinador->nomCoordinador:'')}}" name="nomCoordinador" id="nomCoordinador">
 
            @error('nomCoordinador')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>

            <label for="apeCoordinador">Apellido Coordinador</label><br>
            <input type="text" value="{{ old ('apeCoordinador', isset ($coordinador->apeCoordinador)?$coordinador->apeCoordinador:'')}}" name="apeCoordinador" id="apeCoordinador">
    
            @error('apeCoordinador')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>

            <label for="tipoDoc">Tipo de documento</label><br>
            <select name="tipoDoc" id="tipoDoc" value="{{ old ('tipoDoc', isset ($coordinador->tipoDoc)?$coordinador->tipoDoc:'')}}">
                <option name="tipoDoc" value="CC">CC</option>
                <option name="tipoDoc" value="CI">CI</option>
            </select>
   
            @error('tipoDoc')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>

            <label for="numDoc">Número de documento</label><br>
            <input type="number" value="{{ old ('numDoc', isset ($coordinador->numDoc)?$coordinador->numDoc:'')}}" name="numDoc" id="numDoc">
 
            @error('numDoc')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>

            <label for="correoMisena">Correo Misena</label><br>
            <input type="emile" value="{{ old ('correoMisena', isset ($coordinador->correoMisena)?$coordinador->correoMisena:'')}}" name="correoMisena" id="correoMisena">
    
            @error('correoMisena')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>

            <label for="telefonoCoordinador">Telefono</label><br>
            <input type="number" value="{{ old ('telefonoCoordinador', isset ($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' )}}" 
                    name="telefonoCoordinador" id="telefonoCoordinador">      
    
            @error('telefonoCoordinador')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>

            <label for="id_coordinacion"> 
                coordinación  
            </label>
            <select name="id_coordinacion" id="id_coordinacion" value="{{ old ('id_coordinacion', isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: '')}}">
                @foreach ($coordinacions as $coordinacion)
                    <option value="{{ $coordinacion['id'] }}">
                        {{ $coordinacion['nomCoordinacion'] }}
                    </option>
                @endforeach
            </select> 
    
            @error('id_coordinacion')
                <br>
                    <small>{{$message}}</small>
                <br>
            @enderror
            <br>
            <br><br>


            <input type="submit" value="{{$modo}}">
            
            <button type="submit">
                <a href="{{ url('coordinador')}}">Regresar</a>
            </button>
    
</body>
</html>