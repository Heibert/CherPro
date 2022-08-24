<form action="{{ url ('/excusa/'.$excusa->id)}}" method="post">
@csrf 
{{ method_field('PATCH' )}}
@include('excusa.form',['modo'=>'Editar'])
</form>