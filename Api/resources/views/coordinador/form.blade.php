<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crear coordinador</title>
</head>
<body>
<nav class="navbar text-uppercase navbar-expand-md shadow p-13 mb-15 bg-body rounded bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
        <img src="{{ url('img/logo.png')}}" class="d-inline-block align-top" alt="logo">
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('coordinador')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
    <div>
        <center>
        <div class="border border-dark w-50 opacity-75" style="background-color: orangered ;">
        <form><br>@error('nomCoordinador')
                <small>{{$message}}</small>
         @enderror
        <div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="nomCoordinador">Nombre Coordinador</label>
  </div>
  <input type="text" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="nomCoordinador" id="nomCoordinador" value="{{ isset($coordinador->nomCoordinador)?$coordinador->nomCoordinador:''}}">
</div>
<div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="apeCoordinador">Apellido Coordinador</label>
  </div>
  <input type="text" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="apeCoordinador" id="apeCoordinador" value="{{ isset($coordinador->apeCoordinador)?$coordinador->apeCoordinador:''}}" >
            </div> @error('apeCoordinador')
                    <small>{{$message}}</small>
            @enderror
            <div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="tipoDoc">Tipo de documento</label>
  </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="tipoDoc" id="tipoDoc" value="{{ isset($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}">
                    <option name="tipoDoc" value="CC">CC</option>
                    <option name="tipoDoc" value="CI">TI</option>
                </select>
            </div>
            @error('tipoDoc')
                <small>{{$message}}</small>
            @enderror <div>
<div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="numDoc">Número de documento</label>
  </div>
  <input type="number" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="numDoc" id="numDoc" value="{{  isset($coordinador->numDoc)?$coordinador->numDoc:''}}">
            </div>
            @error('numDoc')
                <small>{{$message}}</small>
            @enderror   
        </div>
        <div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="correoMisena">Correo Misena</label>
  </div>
  <input type="email" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="correoMisena" id="correoMisena" value="{{ isset($coordinador->correoMisena)?$coordinador->correoMisena:''}}">
            </div>
            @error('correoMisena')
                <small>{{$message}}</small>
            @enderror
        <div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="telefonoCoordinador">Telefono</label>
  </div>
  <input type="number" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="telefonoCoordinador" id="telefonoCoordinador" value="{{ isset($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' }}">      
            </div>
            @error('telefonoCoordinador')
                <small>{{$message}}</small>
            @enderror
        <div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="id_coordinacion"> Coordinación</label>
  </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="id_coordinacion" id="id_coordinacion" value="{{ isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: ''}}">
                    @foreach ($coordinaciones as $coordinacion)
                        <option value="{{ $coordinacion['id'] }}">
                            {{ $coordinacion['nomCoordinacion'] }}
                        </option>
                    @endforeach
                </select> 
            </div>
            @error('id_coordinacion')
                <small>{{$message}}</small>
            @enderror
            <div>
            <button type="submit" class="btn btn-primary" value="Guardar">Crear</button>
            </div>
            <br>
            <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="id_estados" id="id_estados" value="{{ isset($coordinador-> id_estados)?$coordinador-> id_estados: ''}}">
                    @foreach ($estados as $e)
                        <option value="{{ $e['id'] }}">
                            {{ $e['nomEstado'] }}
                        </option>
                    @endforeach
                </select> 
            </div>
            @error('id_estados')
                <small>{{$message}}</small>
            @enderror
            <div>
            <button type="submit" class="btn btn-primary" value="Guardar">Crear</button>
            </div><br>
        </center>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>