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
        <div>
            <center>
            <div>
                <label for="numTrimestre">Numero</label>
                <div>
                    <input type="text" name="numTrimestre" id="numTrimestre" value="{{ isset($trimestre-> numTrimestre)?$trimestre-> numTrimestre: '' }}"><br>
                </div>
                @error('numTrimestre')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_ficha">Ficha</label>
                <div>
                    <select name="id_ficha" id="id_ficha" value="{{ isset($trimestre-> id_ficha)?$trimestre-> id_ficha: '' }}">
                        @foreach ($fichas as $ficha)
                            <option value="{{ $ficha['id'] }}">
                                {{ $ficha['numFicha'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('id_ficha')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <br>
            <div>
                <label for="id_tematica"> Tematica </label>
                <div>
                    <select name="id_tematica" id="id_tematica" value="{{ isset($trimestre-> id_tematica)?$trimestre-> id_tematica: '' }}">
                        @foreach ($tematica as $tema)
                            <option value="{{ $tema['id'] }}">
                                {{ $tema['nombreTematica'] }}
                            </option>
                        @endforeach
                    </select> 
                </div>
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