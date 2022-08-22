<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
</head>
<body>
<h4>{{session('mensaje')}}</h4>
<form method="POST" action="{{route('asistencia.store')}}" enctype="multipart/form-data">
@csrf
Fecha:<br><!-- Creo que este deberia ser un timestamp lo pongo por si acaso -->
    <input type="date" name="fechaAsistencia" id="fechaAsistencia"><div>{{$errors->first('fechaAsistencia')}}</div><br>
    
    <select name="idAprendiz" id="idAprendiz">
        <option value="">Elija un aprendiz</option>
            @foreach($Aprendices as $Aprendiz)
                <option value="{{$Aprendiz->id}}">
                    {{$Aprendiz->nombre}}
                </option>
            @endforeach
    </select><div>{{$errors->first('idAprendiz')}}</div><br>
    <select name="idTematica" id="idTematica">
        <option value="">Elija una tematica</option>
            @foreach($Tematicas as $Tematica)
                <option value="{{$Tematica->id}}">
                    {{$Tematica->nombre}}
                </option>
            @endforeach
    </select><div>{{$errors->first('idTematica')}}</div><br>
    <input type="submit">
</form>
</body>
</html>