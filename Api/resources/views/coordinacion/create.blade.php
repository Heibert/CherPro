<br><br>
<form method="POST" action="{{route('coordinacion.store')}}" enctype="multipart/form-data">
@csrf
@include('coordinacion.form');
<form>