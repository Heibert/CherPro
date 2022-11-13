<form method='post' action="{{ url('/aprendiz/') }}" enctype="multipart/form-data">
@csrf
@include('aprendiz.form');
</form>