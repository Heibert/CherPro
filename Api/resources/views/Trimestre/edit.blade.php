<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Editar trimestre</title>
</head>
<body>
    <form action="{{url('/trimestre/'.$trimestres->id)}}" method="post">
        @csrf
        {{ method_field('PATCH')}}
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
                <a class="nav-link navbar-brand text-back btn btn-outline-white" aria-current="page" href="{{ url('trimestre')}}"><i class="bi bi-unindent"> Atras</i></a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <br>
        <section class="d-flex justify-content-center">
    <div class="card col-sm-6 p-3 shadow-lg p-3 mb-5 bg-white rounded ">
        <div class="mb-3">
            <h4 class="text-center">Editar trimestre</h4>
        </div>
        <div class="mb-2">
            <form action="">
                <div class="row mb-3 mx-auto">
                <label for="numTrimestre">Numero</label>
                <input class="from-control rounded" placeholder="Escribe aqui" type="text" name="numTrimestre" id="numTrimestre" value="{{ isset($trimestre-> numTrimestre)?$trimestre-> numTrimestre: '' }}">
                @error('numTrimestre')
                <small>{{$message}}</small>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_ficha">Seleccionar ficha</label>
                <select class="from-control rounded" name="id_ficha" id="id_ficha" value="{{ isset($trimestre-> id_ficha)?$trimestre-> id_ficha: '' }}">
                    @foreach ($fichas as $ficha)
                        <option value="{{ $ficha['id'] }}">
                            {{ $ficha['numFicha'] }}
                        </option>
                    @endforeach
                </select>
                @error('id_ficha')
                <small>{{$message}}</small>
                @enderror
                </div>
                <div class="row mb-3 mx-auto">
                <label for="id_tematica"> Seleccionar tematicas </label>   
                <select class="from-control rounded" name="id_tematica" id="id_tematica" value="{{ isset($trimestre-> id_tematica)?$trimestre-> id_tematica: '' }}">
                    @foreach ($tematica as $tema)
                        <option value="{{ $tema['id'] }}">
                            {{ $tema['nombreTematica'] }}
                        </option>
                    @endforeach
                </select>  
                </div>
                <div class="row mb-2 mx-auto">
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</section>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  

</body>
</html>