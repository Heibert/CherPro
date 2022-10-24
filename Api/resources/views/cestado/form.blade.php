<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear estado</title>
</head>
<body>
    <center>
    <br>
    <div>
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
    </div>
    </center>  
</body>
</html>