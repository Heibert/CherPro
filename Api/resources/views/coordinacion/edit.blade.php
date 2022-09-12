<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinacion</title>
</head>
<body>
    <form action="{{ url('/coordinacion/'.$coordinacion->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
    <nav>
        <a href="{{ url('coordinacion')}}">Regresar</a>
    </nav>
        <div>
            <center>
                <div>
                    <label for="nomCoordinacion">Coordinacion</label><br>
                        <input type="text" name="nomCoordinacion" id="nomCoordinacion" value="{{ old('nomCoordinacion', isset($coordinacion-> nomCoordinacion)?$coordinacion-> nomCoordinacion: '' )}}">
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