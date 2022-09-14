<form action="{{ url('/excusa') }}" method="post" enctype="multipart/form-data">
@csrf
@include('excusa.form')
</form>