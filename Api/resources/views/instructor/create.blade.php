<form action="{{ url('/instructor') }}" method='post' enctype="multipart/form-data"> 
@csrf
@include('instructor.form')
</form>