<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Correo Prueba</title>
</head>
<body>
    <h1>Correo Electronico</h1>
    <p><strong>Fecha:</strong>  {{$enviado['fechaExcusa']}}    </p>
    <p><strong>Descripción:</strong>    {{$enviado['descExcusa']}} </p>
    <p><strong>Adjunto:</strong>    {{$enviado['archivo']}}    </p>
    
</body>
</html>