<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear tematica</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" style="background-color: #008000;">
            <div class="container">
            <img src="https://lostramites.com.co/wp-content/uploads/logo-de-SENA-png-Negro-300x300.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="#page-top">CherPro</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('tematica') }}">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('tematica/create') }}">Crear</a></li>
                    </ul>
                </div>
            </div>
    </nav>
    <br>
    <div>
        <center><br><br><br>
        <div class="border border-dark w-50 opacity-75" style="background-color: orangered ;">
        <form><br>@error('nombreTematica') 
                    <small> {{$message}} </small> 
                @enderror
        <div class="input-group mb-3 w-50">
  <div class="input-group-prepend">
    <label class="input-group-text" for="nombreTematica">Nombre</label>
  </div>
  <input type="text" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="nombreTematica" placeholder="Escriba Aqui" id="nombreTematica" value="{{ isset($tematica-> nombreTematica)?$tematica-> nombreTematica: '' }}">
</div>
<div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="id_instructor">Intructor</label>
  </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="id_instructor" id="id_instructor" value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
                    @foreach($instructors as $instu)
                        <option value="{{ $instu['id'] }}">
                            {{ $instu['nombreInst'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_instructor') 
                <small> {{$message}} </small> 
            @enderror
</div>
<div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="id_programa"> Programa </label>
  </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="id_programa" id="id_programa" value="{{ isset($tematica-> id_programa)?$tematica-> id_programa: '' }}">
                    @foreach ($programas as $pro)
                        <option value="{{ $pro['id'] }}">
                            {{ $pro['nombrePrograma'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_programa') 
                <small> {{$message}} </small> 
            @enderror
</div>
<div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="id_ficha"> Ficha </label>
  </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="id_ficha" id="id_ficha" value="{{ isset($tematica-> id_ficha)?$tematica-> id_ficha: '' }}">
                    @foreach ($fichas as $ficha)
                        <option value="{{ $ficha['id'] }}">
                            {{ $ficha['numFicha'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_ficha') 
                <small> {{$message}} </small> 
            @enderror
</div>
        <div>
            <button type="submit" class="btn btn-primary" value="Guardar">Crear</button>
        </div><br></div>
        </center>
    </div>
</body>
</html>