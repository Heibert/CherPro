<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/table.css')}}">
    <title>Usuarios</title>
</head>
<body>
<div>
<div class="table_container"> 
    <table id="tablax" class="table_body">
        <thead>
            <tr> 
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Contraseña confirmada</th>
                <th>Rol</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name}} </td>
                <td>{{ $u->apellido}}</td>
                <td>{{ $u->telefono}}</td >
                <td>{{ $u->email}}</td>
                <td>{{ $u->password}}</td>
                <td>{{ $u->password_confirmation}}</td>
                <td>{{ $u->rol}}</td>
                <br>
                <td>
                    <form action="{{url('/user/'.$u->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Eliminar"> Eliminar </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script>
          $(document).ready(function () {
              $('#tablax').DataTable({
                  language: {
                      processing: "Tratamiento en curso...",
                      search: "Buscar&nbsp;:",
                      lengthMenu: "Agrupar de _MENU_ items",
                      info: "Coordinaciones del _START_ al _END_ de un total de _TOTAL_ items",
                      infoEmpty: "No existen datos.",
                      infoFiltered: "(filtrado de _MAX_ elementos en total)",
                      infoPostFix: "",
                      loadingRecords: "Cargando...",
                      zeroRecords: "No se encontraron datos con tu busqueda",
                      emptyTable: "No hay datos disponibles en la tabla.",
                      paginate: {
                          first: "Primero",
                          previous: "Anterior",
                          next: "Siguiente",
                          last: "Ultimo"
                      },
                      aria: {
                          sortAscending: ": active para ordenar la columna en orden ascendente",
                          sortDescending: ": active para ordenar la columna en orden descendente"
                      }
                  },
                  scrollY: 550,
                  lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
              });
          });
      </script>
</div>
</body>
</html>