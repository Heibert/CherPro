<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar estado</title>
</head>
<body>
    <center>
    <br>
    <div>
        <form action="{{ url('/estados/'.$estados->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
        <div>
            <label for="nomEstado">Estado</label>
            <div>
                <input type="text" name="nomEstado" id="nomEstado" value="{{ isset($estado-> nomEstado)?$estado-> nomEstado: '' }}">
            </div>
        </div>
        <br>
        <div>
            <button type="submit" value="Guardar">Crear</button>
        </div>
        </form>
    </div>
    </center>  
</body>
</html>