<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar reporte</title>
</head>
<body>
    <div>
        
        <form action="{{ url('/reporte/'.$reporte->id) }}" method="post" enctype="multipart/form-data">
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
          <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('reporte')}}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
<section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Editar reporte</h4>
        </div>
        <div class="mb-2">
            <form action="">
                <div class="row mb-3 mx-auto">
                <label for="fechaReporte">Fecha</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="date" name="fechaReporte" id="fechaReporte" value="{{ isset ($reporte->fechaReporte)?$reporte->fechaReporte:''}}">
                @error('fechaReporte') 
                    <small>{{$message}}</small>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="descReporte">Descripcion</label>
                <textarea class="from-control rounded" placeholder="Escribe aqui" value="{{ isset ($reporte->descReporte)?$reporte->descReporte:''}}" name="descReporte" id="descReporte"></textarea>            
                @error('descReporte') 
                <small>{{$message}}</small>
                @enderror 
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_instructor">Instructor</label>   
                <select class="from-control rounded" name="id_instructor" id="id_instructor" value="{{ isset ($reporte->id_instructor)?$reporte->id_instructor:''}}">
                    @foreach ($inst as $int)
                        <option value="{{ $int['id'] }}">
                            {{ $int['nombreInst'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_instructor') 
                    <small>{{$message}}</small>
                @enderror 
                </select>  
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_coordinador">Coordinador</label>   
                <select class="from-control rounded" name="id_coordinador" id="id_coordinador" value="{{ isset ($reporte->id_coordinador)?$reporte->id_coordinador:''}}">
                    @foreach ($coordi as $coo)
                        <option value="{{ $coo['id'] }}">
                            {{ $coo['nomCoordinador'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_coordinador') 
                    <small>{{$message}}</small>
                @enderror 
                </select>  
                </div>
                <div class="row mb-4 mx-auto">
                <label for="id_aprendiz">Aprendiz</label>   
                <select class="from-control rounded" name="id_aprendiz" id="id_aprendiz" value="{{ isset ($reporte->id_aprendiz)?$reporte->id_aprendiz:''}}">
                    @foreach ($apren as $a)
                        <option value="{{ $a['id'] }}">
                            {{ $a['nombreAprend'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_coordinador') 
                    <small>{{$message}}</small>
                @enderror 
                </select>  
                </div>
                <div class="row mb- mx-auto">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</section>
           <!--  <br>
            <div>
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
                    <input type="submit" value="Enviar mensaje">
                </div>
            </div>
        </form>
        </center>
    </div> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>