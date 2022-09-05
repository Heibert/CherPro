<form action="{{url('/trimestre'.$trimestre->id)}}" method="post">
@csrf
{{method_field('PATCH')}}
@include('Trimestre.form');
</form>