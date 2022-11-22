<form method="POST" action="{{url('/user/')}}" enctype="multipart/form-data">
@csrf
@include('user.form');
</form>