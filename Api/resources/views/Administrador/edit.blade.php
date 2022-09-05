<form action="{{url('/administrador/'.$administrador->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('Administrador.form');
</form>