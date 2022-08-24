<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $modo }} Programa</h1>
            <label for="nombrePrograma">Nombre del programa</label><br>
            <input type="text" value="{{ isset ($programa->nombrePrograma)?$programa->nombrePrograma:''}}" name="nombrePrograma" id="nombrePrograma"><br>

            <input type="submit" value="{{$modo}}">
            
            <button type="submit">
                <a href="{{ url('programa')}}">Regresar</a>
            </button>
    
</body>
</html>