<form action="{{url('/tematica')}}" method="post">
    @csrf
    @include('Tematica.form');
    
</form>