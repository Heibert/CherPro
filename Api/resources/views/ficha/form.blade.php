<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear fichas</title>
</head>
<center>
<body>
    <div>
        <div>
            <label for="numFicha"> Numero de ficha </label>
                <input type="number" name="numFicha" id="numFicha" value="{{ isset($ficha-> numFicha)?$ficha-> numFicha: '' }}">
                    <br>
                    @error('numFicha')
                        <small>{{$message}}</small>
                    @enderror
        </div>
        <br>
        <div>
            <label for="cantAprendiz"> Cantidad de aprendices </label>
                    <input type="number" name="cantAprendiz" id="cantAprendiz" value="{{ isset($ficha-> cantAprendiz)?$ficha-> cantAprendiz: '' }}">
                    <br>
                        @error('cantAprendiz')
                            <small>{{$message}}</small>
                        @enderror
        </div>
        <br>
        <div>
            <label for="id_instructor"> Instructor encargado </label>
                <select name="id_instructor" id="id_instructor" value="{{ isset($ficha-> id_instructor)?$ficha-> id_instructor: '' }}">
                    @foreach ($instructors as $instructor)
                        <option value="{{ $instructor['id'] }}">
                            {{ $instructor['nombreInst'] }}
                        </option>
                    @endforeach
                </select> 
                <br>
                @error('id_instructor')
                    <small>{{$message}}</small>
                @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programa </label>
                <select name="id_programa" id="id_programa" value="{{ isset($ficha-> id_programa)?$ficha-> id_programa: '' }}">
                    @foreach ($programas as $pa)
                        <option value="{{ $pa['id'] }}">
                            {{ $pa['nombrePrograma'] }}
                        </option>
                    @endforeach
                </select> 
                <br>
                    @error('id_programa')
                            <small>{{$message}}</small>
                    @enderror
        </div>
        <br>
        <div>
            <input type="submit" value="Guardar">
            <br><br>
            <a href="{{ url('./') }}"> Regresar </a>
        </div>
    </div>
</center>
</body>
</html>

