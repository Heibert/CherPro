<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Crea excusa</title>
</head>
<body>
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
          <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ url('excusa')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
    <div>
        <center>
        <h3>Enviar excusa</h3>
        <form action="{{ route('enviar.store') }}">
            <div>
                <label for="text">Destinatario</label>
                <div>
                    <input type="text">
                </div>
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
    @endif 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>