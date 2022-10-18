<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login.css')}}">
    @vite(['resources/css/app.css'])
    <title>Trimestres</title>
</head>
<body>
<nav class="navbar text-uppercase navbar-expand-md shadow p-13 mb-15 bg-body rounded bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('index') }}">
        <img src="{{ url('img/logo.png')}}" class="d-inline-block align-top" alt="logo">
    </a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <ul class="navbar-nav navbar-right ms-auto  mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link navbar-brand text-back btn btn-outline-white " aria-current="page" href="{{ url('trimestre/create') }}"><i class="bi bi-plus-lg"> Crear</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-brand text-back btn btn-outline-white " aria-current="page" href="{{ url('admin') }}"><i class="bi bi-unindent"> Atras</i></a>
        </li>
    </ul>
    </div>
  </div>
</nav>
    <table class="table table-hover table-responsive-md">
    <thead class="thead bg-light">
        <tr>
            <th>#</th>
            <th>Numero Trimestre</th>
            <th>Ficha</th>
            <th>Tematicas asignadas</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trimestre as $tr)
        <tr>
            <td>{{$tr->id}}</td>
            <td>{{$tr->numTrimestre}}</</td>
            <td>{{$tr->fichas->numFicha}}</</td>
            <td>{{$tr->id_tematica}}, {{$tr->id_tematica}}</</td>
            <td>
                <a href="{{url('/trimestre/'.$tr->id.'/edit')}}">
                    <button class="btn btn-outline-warning">Editar</button>
                </a> 
            </td>
            <br>
            <td>
                <form action="{{url('/trimestre/'.$tr->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>  
</body>
</html>
