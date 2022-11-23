<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crea excusa </title>
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('excusa')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
<br>
<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Nueva excusa</h4>
        </div>
        <div class="mb-2">
            <form action="{{ route('enviar.store') }}">
                <div class="row mb-3 mx-auto">
                <label for="id_instructor"> Destinatario </label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="id_instructor" id="id_instructor" value="{{ isset($excusa-> id_instructor)?$excusa-> id_instructor: '' }}">
                    @foreach ($instruc as $ins)
                        <option value="{{ $ins['id'] }}">
                            {{ $ins['correoMisena'] }}
                        </option>
                    @endforeach
                </select> 
            @error('id_instructor')
                <small>{{$message}}</small>
            @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="fechaExcusa"> Fecha </label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="date"  value="{{ isset ($excusa->fechaExcusa)?$excusa->fechaExcusa:''}}" name="fechaExcusa" id="fechaExcusa">
                    @error('fechaExcusa') 
                        <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="descExcusa">Asunto</label>
                <textarea class="from-control rounded" value="{{ isset ($excusa->descExcusa)?$excusa->descExcusa:''}}" name="descExcusa" id="descExcusa"></textarea>
                    @error('descExcusa') 
                        <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="archivo"> Adjuntar validacion de la excusa</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="file" value="{{ isset($excusa->archivo)?$excusa->archivo:''}}" name="archivo" id="archivo">
                    @error('archivo') 
                        <small>{{$message}}</small>
                    @enderror
                </div>
                
                <div class="row mb-2 mx-auto">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </form>
            @if(session('info'))
            <script>
            alert("{{session('info')}}");
            </script>
            @endif 
        </div>
    </div>
</section>
    <!-- <div>
        <center>
        <h3>Enviar excusa</h3>
        <form action="{{ route('enviar.store') }}">
            <br>
            <div>
            <label for="id_instructor"> Destinatario </label>
            <div>
                <select name="id_instructor" id="id_instructor" value="{{ isset($excusa-> id_instructor)?$excusa-> id_instructor: '' }}">
                    @foreach ($instruc as $ins)
                        <option value="{{ $ins['id'] }}">
                            {{ $ins['correoMisena'] }}
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
                <label for="fechaExcusa"> Fecha </label>
                    <div>
                        <input type="date" value="{{ isset ($excusa->fechaExcusa)?$excusa->fechaExcusa:''}}" name="fechaExcusa" id="fechaExcusa">
                    </div>
                    @error('fechaExcusa') 
                        <small>{{$message}}</small>
                    @enderror
                </div>
            <br>
            <div>
                <label for="descExcusa" class="form-label">Asunto</label>
                    <div>
                        <textarea value="{{ isset ($excusa->descExcusa)?$excusa->descExcusa:''}}" name="descExcusa" id="descExcusa"></textarea>
                    </div>
                    @error('descExcusa') 
                        <small>{{$message}}</small>
                    @enderror
            </div>
            <br>
            <div>
                <label for="archivo"> Adjuntar validacion de la excusa</label>
                    <div>
                        <input type="file" value="{{ isset($excusa->archivo)?$excusa->archivo:''}}" name="archivo" id="archivo">
                    </div>
                    @error('archivo') 
                        <small>{{$message}}</small>
                    @enderror
            </div>
            <br>
            <div>
                <input type="submit" value="Enviar mensaje">
            </div>
        </form>
        </center> 
    </div>
    @if(session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>