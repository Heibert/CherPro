<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    <title>Asistencias</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top login-nav">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                
        </ul>
        
    </div>
    </div>
    </nav><br><br><center>
    <div class="list-group">
  <a href="{{ url('coordinacion')}}" class="list-group-item list-group-item-action list-group-item-primary">Coordinacion</a>
  <a href="{{ url('coordinador')}}" class="list-group-item list-group-item-action list-group-item-secondary">Coordinador</a>
  <a href="{{ url('excusa')}}" class="list-group-item list-group-item-action list-group-item-success">Excusa</a>
  <a href="{{ url('programa')}}" class="list-group-item list-group-item-action list-group-item-danger">Programa</a>
  <a href="{{ url('reporte')}}" class="list-group-item list-group-item-action list-group-item-warning">Reporte</a>
  <a href="{{ url('tematica')}}" class="list-group-item list-group-item-action list-group-item-info">Tematica</a>
  <a href="{{ url('trimestre')}}" class="list-group-item list-group-item-action list-group-item-light">Trimestre</a>
  <a href="{{ url('administrador')}}" class="list-group-item list-group-item-action list-group-item-dark">Administrador</a>
  <a href="{{ url('asistencia')}}" class="list-group-item list-group-item-action list-group-item-primary">Asistencia</a>
</div></center>

</body>
</html>