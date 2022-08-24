<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $modo }} Excusa</h1>
            <label for="fechaExcusa">Fecha de la excusa</label><br>
            <input type="date" value="{{ isset ($excusa->fechaExcusa)?$excusa->fechaExcusa:''}}" name="fechaExcusa" id="fechaExcusa"><br>

            <label for="fechaExcusa">Descripción de la excusa</label><br>
            <input type="text" value="{{ isset ($excusa->descExcusa)?$excusa->descExcusa:''}}" name="descExcusa" id="descExcusa"><br>


            <select name="idAsistencia" id="idAsistencia">
                <option value="">coordinacion</option>
                @foreach($asistencias as $asistencia)
                <option value="{{$asistencia->id}}">
                {{$asistencia->nombre}}
                </option>
                @endforeach
            </select><div>{{$errors->first('idAsistencia')}}</div><br>


            <input type="submit" value="{{$modo}}">
            
            <button type="submit">
                <a href="{{ url('excusa')}}">Regresar</a>
            </button>
    
</body>
</html>