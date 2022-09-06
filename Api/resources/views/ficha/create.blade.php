<br><br>
<form action="{{ url('/ficha/') }}" method="post" enctype="multipart/form-data">
@csrf
@include('ficha.form');

</form>