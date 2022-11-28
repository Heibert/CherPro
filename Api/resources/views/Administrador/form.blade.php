<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crear administrador </title>
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('administrador')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav><br>
<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Nuevo administrador</h4>
        </div>
        <div class="mb-2">
            <form action="">
                <div class="row mb-3 mx-auto">
                <label for="name">Nombre</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="name" id="name" value="{{ isset($administradors-> name)?$administradors-> name: '' }}">
                 @error('name') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="apellido">Apellido</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="apellido" id="apellido" value="{{ isset($administradors-> apellido)?$administradors-> apellido: '' }}">
                @error('apellido')
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror      
                </div>
                <div class="row mb-3 mx-auto">
                <label for="telefono">Telefono</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="telefono" id="telefono" value="{{ isset($administradors-> telefono)?$administradors-> telefono: '' }}">
                @error('telefono')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="email">Correo</label>
                <input class="from-control rounded" name="email" id="email" value="{{ isset($administradors-> email)?$administradors-> email: '' }}">
                @error('email')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </select>
                @error('id_programa')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_user"> Usuario </label>
                <select class="from-control rounded"  name="id_user" id="id_user" value="{{ isset($administradors-> id_user)?$administradors-> id_user: '' }}">
                        @foreach ($user as $u)
                            <option value="{{ $u['id'] }}">
                                {{ $u['name'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_user')
                        <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                    @enderror
                    </select>
                    @error('id_user')
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
        <div>
            <label for="name">Nombre</label>
            <div>
                <input type="text" name="name" id="name" value="{{ isset($administradors-> name)?$administradors-> name: '' }}">
            </div>
            @error('name') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror
        </div>
        <br>
        <div>
            <label for="apellido">Apellido</label>
            <div>
                <input type="text" name="apellido" id="apellido" value="{{ isset($administradors-> apellido)?$administradors-> apellido: '' }}">
            </div>
            @error('apellido')
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror      
        </div>
        <br>
        <div>
            <label for="telefono">Telefono</label>
            <div>
                <input type="text" name="telefono" id="telefono" value="{{ isset($administradors-> telefono)?$administradors-> telefono: '' }}">
            </div>      
            @error('telefono')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror
        </div>
        <br>
        <div>
            <label for="email">Correo</label>
            <div>
                <input type="text" name="email" id="email" value="{{ isset($administradors-> email)?$administradors-> email: '' }}">
            </div>
            @error('email')
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
            @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programas </label>
            <div>
                <select name="id_programa" id="id_programa" value="{{ isset($administradors-> id_programa)?$administradors-> id_programa: '' }}">
                        @foreach ($programa as $p)
                            <option value="{{ $p['id'] }}">
                                {{ $p['nombrePrograma'] }}
                            </option>
                        @endforeach
                </select>
                @error('id_programa')
                    <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div>
                @enderror
            </div>
        </div>
        <br>
        <div>
            <label for="id_user"> Usuario </label>
                <div>
                    <select name="id_user" id="id_user" value="{{ isset($administradors-> id_user)?$administradors-> id_user: '' }}">
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
            <input type="submit" value="Guardar">
        </div>
        </center>
    </div> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>


