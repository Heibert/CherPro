<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar programa</title>
</head>
<body>
    <form action="{{ url('/programa/'.$programa->id) }}" method="post" enctype="multipart/form-data">
    @csrf 
    {{ method_field('PATCH') }}
<div>
    <div>
        <label for="nombrePrograma">Nombre del programa</label><br>
            <input type="text" name="nombrePrograma" id="nombrePrograma" value="{{ isset($programa->nombrePrograma)?$programa->nombrePrograma:''}}">
            @error('nombrePrograma')
                <small>{{$message}}</small>
            @enderror
    </div>
    <br>
    <div>
    <label for="id_coordinacion"> Coordinacion </label>
        <select name="id_coordinacion" id="id_coordinacion" value="{{ isset($programa-> id_coordinacion)?$programa-> id_coordinacion: '' }}">
            @foreach ($coordinacion as $coor)
                <option value="{{ $coor['id'] }}">
                    {{ $coor['nomCoordinacion'] }}
                </option>
            @endforeach
        </select>
    </div>
    <br>
    <div>
        <input type="submit" value="Guardar">
    </div>
</div>
</body>
</html>