<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crear tematica</title>
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('tematica')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav><br>
<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Nueva tematica</h4>
        </div>
        <div class="mb-2">
            <form action="">
                <div class="row mb-3 mx-auto">
                <label for="nombreTematica">Nombre</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="nombreTematica" placeholder="Escriba Aqui" id="nombreTematica" value="{{ isset($tematica-> nombreTematica)?$tematica-> nombreTematica: '' }}">
                @error('nombreTematica') 
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_instructor">Intructor</label>
                <select class="from-control rounded" name="id_instructor" id="id_instructor" value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
                @foreach ($instructors as $instructor)
                <option value="{{ $instructor['id'] }}">
                    {{ $instructor['nombreInst'] }}
                </option>
                @endforeach
                </select> 
                @error('id_instructor')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_programa"> Programa </label>   
                <select class="from-control rounded" name="id_programa" id="id_programa" value="{{ isset($tematica-> id_programa)?$tematica-> id_programa: '' }}">
                    @foreach ($programas as $pro)
                        <option value="{{ $pro['id'] }}">
                            {{ $pro['nombrePrograma'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_programa') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </select>  
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_ficha"> Ficha </label>   
                <select class="from-control rounded" name="id_ficha" id="id_ficha" value="{{ isset($tematica-> id_ficha)?$tematica-> id_ficha: '' }}">
                    @foreach ($fichas as $ficha)
                        <option value="{{ $ficha['id'] }}">
                            {{ $ficha['numFicha'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_ficha') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </select>  
                </div>
                <div class="row mb- mx-auto">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</section>
    <!-- <br>
    <div>
        <center><br><br><br>
        <div class="border border-dark w-50 opacity-75" style="background-color: orangered ;">
        <form><br>@error('nombreTematica') 
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
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
  <div>
    <label for="id_instructor"> Instructor </label>
    <div>
        <select name="id_instructor" id="id_instructor" value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
            @foreach ($instructors as $instructor)
                <option value="{{ $instructor['id'] }}">
                    {{ $instructor['nombreInst'] }}
                </option>
            @endforeach
        </select> 
    </div>
    @error('id_instructor')
        <small>{{$message}}</small>
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
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
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
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
</div>
        <div>
            <button type="submit" class="btn btn-primary" value="Guardar">Crear</button>
        </div><br></div>
        </center>
    </div> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>