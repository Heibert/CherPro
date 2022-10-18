<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear ficha</title>
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('ficha')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
    <div>
        <center>
        <div>
            <label for="numFicha"> Numero de ficha </label>
            <div>
                <input type="number" name="numFicha" id="numFicha" value="{{ isset($ficha-> numFicha)?$ficha-> numFicha: '' }}">
            </div>
            @error('numFicha')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="cantAprendiz"> Cantidad de aprendices </label>
            <div>
                <input type="number" name="cantAprendiz" id="cantAprendiz" value="{{ isset($ficha-> cantAprendiz)?$ficha-> cantAprendiz: '' }}">
            </div>
            @error('cantAprendiz')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_instructor"> Instructor encargado </label>
            <div>
                <select name="id_instructor" id="id_instructor" value="{{ isset($ficha-> id_instructor)?$ficha-> id_instructor: '' }}">
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
        <br>
        <div>
            <label for="id_programa"> Programa </label>
            <div>
                <select name="id_programa" id="id_programa" value="{{ isset($ficha-> id_programa)?$ficha-> id_programa: '' }}">
                    @foreach ($programas as $pa)
                        <option value="{{ $pa['id'] }}">
                            {{ $pa['nombrePrograma'] }}
                        </option>
                    @endforeach
                </select> 
            </div>
            @error('id_programa')
                    <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <input type="submit" value="Guardar">
        </div>
        </center>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>

