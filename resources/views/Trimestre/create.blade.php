<form action="{{url('/trimestre')}}" method="post">
    @csrf
    @include('Trimestre.form');
    
</form>