<form action="{{ url('/reporte/') }}" method="post" enctype="multipart/form-data">
@csrf
@include('reporte.form');
</form>