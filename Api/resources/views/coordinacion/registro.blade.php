<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinacion</title>
</head>
<body>
<h4>{{session('mensaje')}}</h4>
<form method="POST" action="{{route('coordinacion.store')}}" enctype="multipart/form-data">
@csrf
    <input type="text" name="nomCoordinacion" id="nomCoordinacion" placeholder="Nombre de la coordinacion">
    <div>{{$errors->first('nomCoordinacion')}}</div><br>
    <select name="idPrograma" id="idPrograma">
        <option value="">Elija un programa</option>
            @foreach($programas as $programa)
                <option value="{{$programa->id}}">
                    {{$programa->nombre}}
                </option>
            @endforeach
    </select><div>{{$errors->first('idPrograma')}}</div><br>
    <input type="submit">
</form>
</body>
</html>