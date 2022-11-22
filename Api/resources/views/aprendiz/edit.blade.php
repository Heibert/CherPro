<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Aprendiz</title>
</head>
<body>
    <form action="{{ url('/aprendiz/'.$aprendiz->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('aprendiz')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
        <div>
            <center>
            <div>
                <label for="nombreAprend" > Nombre del Aprendiz </label>
                <div>
                    <input type="text" name="nombreAprend" id="nombreAprend" value="{{ isset($aprendiz-> nombreAprend)?$aprendiz-> nombreAprend: '' }}"> 
                </div>
                @error('nombreAprend') 
                    <small> {{$message}} </small> 
                @enderror
            </div>
            <br>
            <div>
                <label for="apelliAprend"> Apellido del Aprendiz </label>
                <div>
                    <input type="text" name="apelliAprend" id="apelliAprend" value="{{ isset($aprendiz-> apelliAprend)?$aprendiz-> apelliAprend: '' }}">
                </div>
                @error('apelliAprend') 
                    <small> {{$message}} </small>
                @enderror
            </div>
            <br>
            <div>
                <label for="tipoDoc"> Tipo de documento </label>
                <div>
                    <input type="text" name="tipoDoc"  id="tipoDoc" value="{{ isset($aprendiz-> tipoDoc)?$aprendiz-> tipoDoc: '' }}">
                </div>
                @error('tipoDoc')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="numDoc"> Número de documento </label>
                <div>
                    <input type="number" name="numDoc"  id="numDoc" value="{{ isset($aprendiz-> numDoc)?$aprendiz-> numDoc: '' }}">
                </div>
                @error('numDoc')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
            <label for="id_user"> Correo Misena </label>
            <div>
                <input type="text" name="id_user" id="id_user" value="{{ isset($aprendiz-> id_user)?$aprendiz-> id_user: '' }}">
            </div>
            @error('id_user')
                <small>{{$message}}</small>
            @enderror
        </div>
            <br>
            <div>
                <label for="correoAprend"> Correo personal </label>
                <div>
                    <input type="text" name="correoAprend" id="correoAprend" value="{{ isset($aprendiz-> correoAprend)?$aprendiz-> correoAprend: '' }}">
                </div>
                @error('correoAprend')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="telefonoAprend"> Telefono </label>
                <div>
                    <input type="text" name="telefonoAprend" id="telefonoAprend" value="{{ isset($aprendiz-> telefonoAprend)?$aprendiz-> telefonoAprend: '' }}">
                </div>
                @error('telefonoAprend')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_ficha"> Fichas </label>
                <div>
                    <select name="id_ficha" id="id_ficha" value="{{ isset($aprendiz-> id_ficha)?$aprendiz-> id_ficha: '' }}">
                        @foreach ($fichas as $ficha)
                            <option value="{{ $ficha['id'] }}">
                                {{ $ficha['numFicha'] }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    @error('id_ficha')
                        <small>{{$message}}</small>
                    @enderror
                </div>
            </div>
            <br>
            <div>
                <label for="estado"> Estado </label>
                <div>
                    <select name="estado" value="{{isset($aprendiz-> estado)?$aprendiz-> estado: ''}}">
                        <option> </option>
                        <option name="estado" value="En formacion">En formación</option>
                        <option name="estado" value="Desertado">Desertado</option>
                        <option name="estado" value="Proceso de formación aplazado">En aplazamiento</option>
                    </select>
                </div>
                @error('estado')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_user"> Usuario </label>
                <div>
                    <select name="id_user" id="id_user" value="{{ isset($aprendiz-> id_user)?$aprendiz-> id_user: '' }}">
                        @foreach ($user as $u)
                            <option value="{{ $u['id'] }}">
                                {{ $u['name'] }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    @error('id_user')
                        <small>{{$message}}</small>
                    @enderror
                </div>
            <br>
            <div>
                <input type="submit" value="Guardar">
            </div>
            </center>
        </div>
    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>



