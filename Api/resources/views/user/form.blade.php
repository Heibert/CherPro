<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Crear usuario</title>
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('user')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav><br>
<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Nuevo usuario</h4>
        </div>
        <div class="mb-2">
            <form action="">
                <div class="row mb-3 mx-auto">
                <label for="name"> Nombre </label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="name" id="name" value="{{ isset($user-> name)?$user-> name: '' }}"> 
                @error('name') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="apellido"> Apellido </label>
                <input class="from-control rounded" placeholder="Escribe aqui" name="apellido" id="apellido" value="{{ isset($user-> apellido)?$user-> apellido: '' }}"> 
                @error('apellido') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="telefono"> Telefono </label>
                <input class="from-control rounded" placeholder="Escribe aqui" name="telefono" id="telefono" value="{{ isset($user-> telefono)?$user-> telefono: '' }}"> 
                @error('telefono') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="email"> Correo </label>
                <input class="from-control rounded" placeholder="Escribe aqui" name="email" id="email" value="{{ isset($user-> email)?$user-> email: '' }}"> 
                @error('email') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="password"> Contraseña </label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="password" name="password" id="password" value="{{ isset($user-> password)?$user-> password: '' }}"> 
                @error('password') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="rol"> Rol </label>   
                <select class="from-control rounded" name="rol" id="rol" value="{{ isset($user-> rol)?$user-> rol: '' }}">
                    <option value="Administrador">Administrador</option>
                    <option value="Aprendiz">Aprendiz</option>
                    <option value="Coordinador">Coordinador</option>
                    <option value="Instructor">Instructor</option>
                </select>  
                @error('rol') 
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
        <div>
            <label for="name"> Nombre </label>
            <div>
                <input type="text" name="name" id="name" value="{{ isset($user-> name)?$user-> name: '' }}"> 
            </div>
            @error('name') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
        <div>
            <label for="apellido"> Apellido </label>
            <div>
                <input type="text" name="apellido" id="apellido" value="{{ isset($user-> apellido)?$user-> apellido: '' }}"> 
            </div>
            @error('apellido') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
        <div>
            <label for="telefono"> Telefono </label>
            <div>
                <input type="text" name="telefono" id="telefono" value="{{ isset($user-> telefono)?$user-> telefono: '' }}"> 
            </div>
            @error('telefono') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
        <div>
            <label for="email"> Correo </label>
            <div>
                <input type="text" name="email" id="email" value="{{ isset($user-> email)?$user-> email: '' }}"> 
            </div>
            @error('email') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
        <div>
            <label for="password"> Contraseña </label>
            <div>
                <input type="text" name="password" id="password" value="{{ isset($user-> password)?$user-> password: '' }}"> 
            </div>
            @error('password') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
        <div>
            <label for="password_confirmation"> Confirmar contraseña </label>
            <div>
                <input type="text" name="password_confirmation" id="password_confirmation" value="{{ isset($user-> password_confirmation)?$user-> password_confirmation: '' }}"> 
            </div>
            @error('password_confirmation') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
        <div>
            <label for="rol"> Rol </label>
            <div>
                <input type="text" name="rol" id="rol" value="{{ isset($user-> rol)?$user-> rol: '' }}"> 
            </div>
            @error('rol') 
                <div class="bg-danger p-1 mb-2">
                <strong class="text-white"> <i class="bi bi-exclamation-circle" style="color: yellow"></i> {{$message}}</strong>
            </div> 
            @enderror
        </div>
        <br>
            <div>
                <input type="submit" value="Guardar">
            </div>
    </div> -->
</body>
</html>