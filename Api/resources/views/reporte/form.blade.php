<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])<title>Crear reporte</title>
</head>
<body>
    <div>
        <center>
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
                            <a class="nav-link navbar-brand text-white " aria-current="page" href="{{ url('reporte')}}"><i class="bi bi-unindent"> Atras</i></a>
                        </li>
                    </div>
                </div>
            </nav>
    </div>
        <br>
    <div>
        <center>
        <div>
            <label for="fechaReporte">Fecha</label>
                <div>
                    <input type="date" name="fechaReporte" id="fechaReporte" value="{{ isset ($reporte->fechaReporte)?$reporte->fechaReporte:''}}">
                </div>
                @error('fechaReporte') 
                    <small>{{$message}}</small>
                @enderror
        </div>
        <br>
        <div>
            <label for="descReporte">Descripcion</label>
            <div>
                <textarea value="{{ isset ($reporte->descReporte)?$reporte->descReporte:''}}" name="descReporte" id="descReporte"></textarea>            
            </div>
            @error('descReporte') 
                <small>{{$message}}</small>
            @enderror 
        </div>
        <br>
        <div>
            <label for="id_instructor">Instructor</label>
            <div>
                <select name="id_instructor" id="id_instructor" value="{{ isset ($reporte->id_instructor)?$reporte->id_instructor:''}}">
                    @foreach ($inst as $int)
                        <option value="{{ $int['id'] }}">
                            {{ $int['nombreInst'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_instructor') 
                    <small>{{$message}}</small>
                @enderror 
            </div>
        </div>
        <br>
        <div>
            <label for="id_coordinador">Coordinador</label>
            <div>
                <select name="id_coordinador" id="id_coordinador" value="{{ isset ($reporte->id_coordinador)?$reporte->id_coordinador:''}}">
                    @foreach ($coordi as $coo)
                        <option value="{{ $coo['id'] }}">
                            {{ $coo['nomCoordinador'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_coordinador') 
                    <small>{{$message}}</small>
                @enderror 
            </div>
        </div>
        <br>
        <div>
            <input type="submit" value="Guardar">
        </div>
    </div>
    </center>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</body>
</html>