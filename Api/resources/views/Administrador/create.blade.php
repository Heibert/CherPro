<form action="{{url('/administrador')}}" method="post">
    @csrf
    @include('Administrador.form');
    
</form>