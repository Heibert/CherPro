<form action="{{url('/tematica')}}" method="post">
    @csrf
    @include('tematica.form');
    
</form>