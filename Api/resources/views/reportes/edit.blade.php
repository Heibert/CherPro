<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>
<body>
<h4>{{session('mensaje')}}</h4>
<form method="POST" action="{{url("reporte/{$reportes->id}")}}" enctype="multipart/form-data">
@csrf
@method('PUT')
    <select name="instructor" id="instructor">
        <option value="">{{$reportes->idInstructor}}</option>
            @foreach($instructores as $instructor)
                <option value="{{$instructor->id}}">
                    {{$instructor->nombre}}
                </option>
            @endforeach
            
    </select><div>{{$errors->first('instructor')}}</div><br><br>
    <select name="coordinador" id="coordinador">
        <option value="">{{$reportes->idCoordinador}}</option>
            @foreach($instructores as $instructor)
                <option value="{{$instructor->id}}">
                    {{$instructor->nombre}}
                </option>
            @endforeach
    </select>
    <div>{{$errors->first('coordinador')}}</div><br>
    <br>
    <input type="date" name="fecha" value="{{$reportes->fechaReporte}}">
    <div>{{$errors->first('fecha')}}</div>
    <input type="submit">
</form>
</body>
</html>