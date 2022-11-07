<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <div>
        <div>
            <h2>Reporte de deserción</h2>
            @foreach ($reporte as $repor)
                <p>
                    El contenido de este reporte con numero de identificación {{$repor->id}}, informa que el
                    instructor {{$repor->instructores->nombreInst}} solicita la {{$repor->descReporte}} de la ficha 2465903 el dia 
                    {{$repor->fechaReporte}} a causa de la acumulación de inasistencias en la formación academica.
                    <br>
                    <br>
                    Firma el coordinador {{$repor->coordinadores->nomCoordinador}}, perteneciente a la Coordinación de logistica. 
                </p>
            @endforeach
        </div>
    </div>
</body>
</html>