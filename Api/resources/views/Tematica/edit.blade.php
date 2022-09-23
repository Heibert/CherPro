<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar tematica</title>
</head>
<body>
    <form action="{{ url('/tematica/'.$tematica->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <nav class="navbar text-uppercase navbar-expand-md  bg-dark">
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
          <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ url('tematica')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
    <div>
        <center>
        <div class="border border-dark w-50 opacity-75" style="background-color: orangered ;">
        <form><br>@error('nombreTematica') 
                    <small> {{$message}} </small> 
                @enderror
        <div class="input-group mb-3 w-50">
        <div class="input-group-prepend">
        <label class="input-group-text" for="nombreTematica">Nombre</label>
        </div>
  <input type="text" class="form-control" aria-label="Escriba Aqui" aria-describedby="basic-addon1" name="nombreTematica" id="nombreTematica" value="{{ isset($tematica-> nombreTematica)?$tematica-> nombreTematica: '' }}"><br>
                    </div>
<div class="input-group mb-3 w-50">
<div class="input-group-prepend">
    <label class="input-group-text" for="id_instructor"> Instructor </label>
    </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1"  name="id_instructor" id="id_instructor" value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
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
    <label class="input-group-text" for="id_ficha"> Fichas </label>
    </div>
  <select class="custom-select" aria-label="Escriba Aqui" aria-describedby="basic-addon1"  name="id_ficha" id="id_ficha" value="{{ isset($tematica-> id_ficha)?$tematica-> id_ficha: '' }}">
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
            <button type="submit" class="btn btn-primary" value="Guardar">Guardar</button>
        </div><br></div>
            </center>
        </div>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>