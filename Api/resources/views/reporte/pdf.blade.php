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
            
                <p>
                    El contenido de este reporte con numero de identificación {{$reporte->id}}, informa que el
                    instructor {{$reporte->instructores->nombreInst}} solicita la {{$reporte->descReporte}} del aprendiz {{$reporte->aprendices->nombreAprend}}, de la ficha 2465903 el dia 
                    {{$reporte->fechaReporte}} a causa de la acumulación de inasistencias en la formación academica.
                    <br>
                    <br>
                    Firma el coordinador {{$reporte->coordinadores->nomCoordinador}}, perteneciente a la Coordinación de logistica. 
                </p>
                    </div>
    </div>
</body>
</html>