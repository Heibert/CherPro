<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crear coordinador </title>
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
</nav><br>
<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Nuevo coordinador</h4>
        </div>
        <div class="mb-2">
            <form action="">
                <div class="row mb-3 mx-auto">
                <label for="nomCoordinador">Nombre Coordinador</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="nomCoordinador" id="nomCoordinador" value="{{ isset($coordinador->nomCoordinador)?$coordinador->nomCoordinador:''}}">
                @error('nomCoordinador')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="apeCoordinador">Apellido Coordinador</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text"  name="apeCoordinador" id="apeCoordinador" value="{{ isset($coordinador->apeCoordinador)?$coordinador->apeCoordinador:''}}" >
                @error('apeCoordinador')
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="tipoDoc">Tipo de documento</label>
                <select class="from-control rounded" name="tipoDoc" id="tipoDoc" value="{{ isset($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}">
                <option name="tipoDoc" value="CC">CC</option>
                </select>
                @error('tipoDoc')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="numDoc">Número de documento</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="numDoc" id="numDoc" value="{{  isset($coordinador->numDoc)?$coordinador->numDoc:''}}">
                @error('numDoc')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror   
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_user"> Correo Misena </label>
                    <select class="from-control rounded" name="id_user" id="id_user" value="{{ isset($coordinador-> id_user)?$coordinador-> id_user: '' }}">
                        @foreach ($user as $u)
                            <option value="{{ $u['id'] }}">
                                {{ $u['email'] }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    @error('id_user')
                        <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                    @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="telefonoCoordinador">Telefono</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="telefonoCoordinador" id="telefonoCoordinador" value="{{ isset($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' }}">      
                @error('telefonoCoordinador')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_coordinacion"> Coordinación</label>
                <select class="from-control rounded" name="id_coordinacion" id="id_coordinacion" value="{{ isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: ''}}">
                    @foreach ($coordinaciones as $coordinacion)
                        <option value="{{ $coordinacion['id'] }}">
                            {{ $coordinacion['nomCoordinacion'] }}
                        </option>
                    @endforeach
                </select> 
                @error('id_coordinacion')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="estado"> Estado </label>
                <select class="from-control rounded" name="estado" value="{{ isset($coordinador-> estado)?$coordinador-> estado: ''}}">
                        <option name="estado" value="Activo">Activo</option>
                        <option name="estado" value="Inactivo">Inactivo</option>
                    </select>
                @error('estado')
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-2 mx-auto">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</section>
    <!-- <div>
        <center>
        <div class="border border-dark w-50 opacity-75" style="background-color: orangered ;">
        <form><br>@error('nomCoordinador')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
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
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror
            <div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="tipoDoc">Tipo de documento</label>
      </div>
      <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="tipoDoc" id="tipoDoc" value="{{ isset($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}">
        <option name="tipoDoc" value="CC">CC</option>
      </select>
  @error('tipoDoc')
    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
  @enderror
  <br>
<div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="numDoc">Número de documento</label>
  </div>
  <input type="number" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="numDoc" id="numDoc" value="{{  isset($coordinador->numDoc)?$coordinador->numDoc:''}}">
            </div>
            @error('numDoc')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror   
        </div>
        <div class="input-group mb-3 w-50">
        <div>
            <label for="id_user"> Correo Misena </label>
            <div>
                <input type="text" name="id_user" id="id_user" value="{{ isset($coordinador-> id_user)?$coordinador-> id_user: '' }}">
            </div>
            @error('id_user')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror
        </div>
        <div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="telefonoCoordinador">Telefono</label>
  </div>
  <input type="number" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="telefonoCoordinador" id="telefonoCoordinador" value="{{ isset($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' }}">      
            </div>
            @error('telefonoCoordinador')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
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
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror
            <div>
            <br>
            <div>
                <label for="estado"> Estado </label>
                <div>
                    <select name="estado" value="{{ isset($coordinador-> estado)?$coordinador-> estado: ''}}">
                        <option> </option>
                        <option name="estado" value="Activo">Activo</option>
                        <option name="estado" value="Inactivo">Inactivo</option>
                    </select>
                </div>
                @error('estado')
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_user"> Usuario </label>
                <div>
                    <select name="id_user" id="id_user" value="{{ isset($coordinador-> id_user)?$coordinador-> id_user: '' }}">
                        @foreach ($user as $u)
                            <option value="{{ $u['id'] }}">
                                {{ $u['name'] }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    @error('id_user')
                        <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                    @enderror
                </div>
            <br>
            <div>
            <div>
              <button type="submit" class="btn btn-primary" value="Guardar">Crear</button>
            </div>
        </center>
    </div> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>