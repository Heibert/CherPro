<form action="{{ url('/estados/') }}" method="post" enctype="multipart/form-data">
@csrf
@include('cestado.form');
</form>