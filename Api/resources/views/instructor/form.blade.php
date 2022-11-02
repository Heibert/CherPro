<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear instructor</title>
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('instructor')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav> 
    <div>
        <center>
        <div>
            <label for="nombreInst"> Nombre del Instructor </label>
            <div>
                <input type="text" name="nombreInst" id="nombreInst" value="{{ isset($instructor-> nombreInst)?$instructor-> nombreInst: '' }}">
            </div>
            @error('nombreInst')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="apellidoInst"> Apellido del Instructor </label>
            <div>
                <input type="text" name="apellidoInst" id="apellidoInst" value="{{ isset($instructor-> apellidoInst)?$instructor-> apellidoInst: '' }}">
            </div>
            @error('apellidoInst')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="tipoDoc"> Tipo de documento </label>
            <div>
                <input type="text" name="tipoDoc" id="tipoDoc" value="{{ isset($instructor-> tipoDoc)?$instructor-> tipoDoc: '' }}">
            </div>
            @error('tipoDoc')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="numDoc"> Número de documento </label>
            <div>
                <input type="number" name="numDoc" id="numDoc" value="{{ isset($instructor-> numDoc)?$instructor-> numDoc: '' }}">
            </div>
            @error('numDoc')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="correoMisena"> Correo Misena </label>
            <div>
                <input type="text" name="correoMisena" id="correoMisena" value="{{ isset($instructor-> correoMisena)?$instructor-> correoMisena: '' }}">
            </div>
            @error('correoMisena')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="telefonoInst"> Telefono </label>
            <div>
                <input type="text" name="telefonoInst" id="telefonoInst" value="{{ isset($instructor-> telefonoInst)?$instructor-> telefonoInst: '' }}">
            </div>
            @error('telefonoInst')
                <small>{{$message}}</small>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programas </label>
            <div>
                <select name="id_programa" id="id_programa" value="{{ isset($instructor-> id_programa)?$instructor-> id_programa: '' }}">
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
            <label for="id_estados"> Estados </label>
            <div>
                <select name="id_estados" id="id_programa" value="{{ isset($instructor-> id_estados)?$instructor-> id_estados: '' }}">
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






