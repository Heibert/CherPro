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
            <input type="text" value="{{ isset ($coordinador->nomCoordinador)?$coordinador->nomCoordinador:''}}" name="nomCoordinador" id="nomCoordinador"><br>

            <label for="apeCoordinador">Apellido Coordinador</label><br>
            <input type="text" value="{{ isset ($coordinador->apeCoordinador)?$coordinador->apeCoordinador:''}}" name="apeCoordinador" id="apeCoordinador"><br>

            <label for="tipoDoc">Tipo de documento</label><br>
            <input type="text" value="{{ isset ($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}" name="tipoDoc" id="tipoDoc"><br>

            <label for="numDoc">Número de documento</label><br>
            <input type="number" value="{{ isset ($coordinador->numDoc)?$coordinador->numDoc:''}}" name="numDoc" id="numDoc"><br>

            <label for="correoMisena">Correo Misena</label><br>
            <input type="text" value="{{ isset ($coordinador->correoMisena)?$coordinador->correoMisena:''}}" name="correoMisena" id="correoMisena"><br>

            <label for="telefonoCoordinador">Telefono</label><br>
            <input type="number" value="{{ isset ($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:''}}" name="telefonoCoordinador" id="telefonoCoordinador"><br>

            <select name="idCoordinacion" id="idCoordinacion">
                <option value="">coordinacion</option>
                @foreach($coordinaciones as $coordinacion)
                <option value="{{$programa->id}}">
                {{$coordinacion->nombre}}
                </option>
                @endforeach
            </select><div>{{$errors->first('idCoordinacion')}}</div><br>


            <input type="submit" value="{{$modo}}">
            
            <button type="submit">
                <a href="{{ url('coordinador')}}">Regresar</a>
            </button>
    
</body>
</html>