<form action="{{url('/tematica'.$tematica->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('Tematica.form');
</form>