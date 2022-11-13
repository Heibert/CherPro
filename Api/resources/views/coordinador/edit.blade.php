<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar coordinador</title>
</head>
<body>
    <form action="{{ url ('/coordinador/'.$coordinador->id)}}" method="post">
    @csrf 
    {{ method_field('PATCH' )}}
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
            <div>
                <label for="nomCoordinador">Nombre Coordinador</label>
                <div>
                    <input type="text" name="nomCoordinador" id="nomCoordinador" value="{{ isset($coordinador->nomCoordinador)?$coordinador->nomCoordinador:''}}">
                </div>
                @error('nomCoordinador')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="apeCoordinador">Apellido Coordinador</label>
                <div>
                    <input type="text" name="apeCoordinador" id="apeCoordinador" value="{{ isset($coordinador->apeCoordinador)?$coordinador->apeCoordinador:''}}" >
                </div>
                @error('apeCoordinador')
                        <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="tipoDoc">Tipo de documento</label>
                <div>
                    <select name="tipoDoc" id="tipoDoc" value="{{ isset($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}">
                        <option name="tipoDoc" value="CC">CC</option>
                        <option name="tipoDoc" value="CI">CI</option>
                    </select>
                </div>
                @error('tipoDoc')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="numDoc">Número de documento</label>
                <div>
                    <input type="number" name="numDoc" id="numDoc" value="{{  isset($coordinador->numDoc)?$coordinador->numDoc:''}}">
                </div>
                @error('numDoc')
                    <small>{{$message}}</small>
                @enderror   
            </div>
            <br>
            <div>  
                <label for="correoMisena">Correo Misena</label>
                <div>
                    <input type="email" name="correoMisena" id="correoMisena" value="{{ isset($coordinador->correoMisena)?$coordinador->correoMisena:''}}">
                </div>
                @error('correoMisena')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="telefonoCoordinador">Telefono</label>
                <div>
                    <input type="number" name="telefonoCoordinador" id="telefonoCoordinador" value="{{ isset($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' }}">      
                </div>
                @error('telefonoCoordinador')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_coordinacion"> Coordinación </label>
                <div>
                    <select name="id_coordinacion" id="id_coordinacion" value="{{ isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: ''}}">
                        @foreach ($coordinacion as $coordinacion)
                            <option value="{{ $coordinacion['id'] }}">
                                {{ $coordinacion['nomCoordinacion'] }}
                            </option>
                        @endforeach
                    </select> 
                </div>
                @error('id_coordinacion')
                    <small>{{$message}}</small>
                @enderror
            </div>
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
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary" value="Guardar">Guardar</button>
            </div>
            </center>
        </div>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>



