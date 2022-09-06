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


            <label for="id_coordinacion"> 
                coordinación  
            </label>
            <select name="id_coordinacion" id="id_coordinacion" value="{{ isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: '' }}">
                @foreach ($coordinacions as $coordinacion)
                    <option value="{{ $coordinacion['id'] }}">
                        {{ $coordinacion['nomCoordinacion'] }}
                    </option>
                @endforeach
            </select> 
            <br><br>



            <input type="submit" value="{{$modo}}">
            
            <button type="submit">
                <a href="{{ url('excusa')}}">Regresar</a>
            </button>
    
</body>
</html>