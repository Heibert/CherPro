<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinacion</title>
</head>
<body>
    <nav>
        <a href="{{ url('coordinacion')}}">Regresar</a>
    </nav>
        <div>
            <center>
                <div>
                    <label for="nomCoordinacion">Coordinacion</label><br>
                        <input type="text" name="nomCoordinacion" id="nomCoordinacion" placeholder="Nombre de la coordinacion">
                            <br>
                            @error('nomCoordinacion')
                                    <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <input type="submit" method="Guardar">
                </div>
            </center>
        </div>
</body>
</html>