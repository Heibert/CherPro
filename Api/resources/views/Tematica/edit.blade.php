<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tematica</title>
</head>
<body>
    <form action="{{ url('/tematica/'.$tematica->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <nav>
            <a href="{{ url('tematica') }}"> Tematicas </a>
        </nav>
        <div>
            <center>
            <div>
                <label for="nombreTematica">Nombre</label>
                    <div>
                        <input type="text" name="nombreTematica" id="nombreTematica" value="{{ isset($tematica-> nombreTematica)?$tematica-> nombreTematica: '' }}"><br>
                    </div>
                    @error('nombreTematica') 
                        <small> {{$message}} </small> 
                    @enderror
            </div>
            <br>
            <div>
                <label for="id_instructor"> Instructor </label>
                <div>
                    <select name="id_instructor" id="id_instructor" value="{{ isset($tematica-> id_instructor)?$tematica-> id_instructor: '' }}">
                        @foreach($instructors as $instu)
                            <option value="{{ $instu['id'] }}">
                                {{ $instu['nombreInst'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>
                @error('id_instructor') 
                    <small> {{$message}} </small> 
                @enderror
            </div>
            <br>
            <div>
                <label for="id_programa"> Programa </label>
                <div>
                    <select name="id_programa" id="id_programa" value="{{ isset($tematica-> id_programa)?$tematica-> id_programa: '' }}">
                        @foreach ($programas as $pro)
                            <option value="{{ $pro['id'] }}">
                                {{ $pro['nombrePrograma'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>
                @error('id_programa') 
                    <small> {{$message}} </small> 
                @enderror
            </div>
            <br>
            <div>
                <label for="id_ficha"> Fichas </label>
                <div>
                    <select name="id_ficha" id="id_ficha" value="{{ isset($tematica-> id_ficha)?$tematica-> id_ficha: '' }}">
                        @foreach ($fichas as $ficha)
                            <option value="{{ $ficha['id'] }}">
                                {{ $ficha['numFicha'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>
                @error('id_ficha') 
                    <small> {{$message}} </small> 
                @enderror
            </div>
            <br>
            <div>
                <input type="submit" value="Guardar">
            </div>
            </center>
        </div>
    </form>
</body>
</html>