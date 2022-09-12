<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Aprendiz</title>
</head>
<body>
    <center>

    <div>
        <div>
            <label for="nombreAprend"> Nombre del Aprendiz </label>
            <div>
                <input type="text" name="nombreAprend" id="nombreAprend" value="{{ isset($aprendiz-> nombreAprend)?$aprendiz-> nombreAprend: '' }}"> 
            </div>
            <br>
            @error('nombreAprend') 
                <small> {{$message}} </small> 
            @enderror
        </div>
    <br>
        <div>
            <label for="apelliAprend"> Apellido del Aprendiz </label>
            <input type="text" name="apelliAprend" id="apelliAprend" value="{{ isset($aprendiz-> apelliAprend)?$aprendiz-> apelliAprend: '' }}">
            <br>
            @error('apelliAprend') 
                <small> {{$message}} </small>
            @enderror
        </div>
    <br>
        <div>
            <label for="tipoDoc"> Tipo de documento </label>
                <input type="text" name="tipoDoc"  id="tipoDoc" value="{{ isset($aprendiz-> tipoDoc)?$aprendiz-> tipoDoc: '' }}">
                    <br>
                        @error('tipoDoc')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <div>
            <label for="numDoc"> Número de documento </label>
                <input type="number" name="numDoc"  id="numDoc" value="{{ isset($aprendiz-> numDoc)?$aprendiz-> numDoc: '' }}">
                    <br>
                        @error('numDoc')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <div>
            <label for="correoMisena"> Correo Misena </label>
                <input type="text" name="correoMisena" id="correoMisena" value="{{ isset($aprendiz-> correoMisena)?$aprendiz-> correoMisena: '' }}">
                    <br>
                        @error('correoMisena')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <div>
            <label for="correoAprend"> Correo personal </label>
                <input type="text" name="correoAprend" id="correoAprend" value="{{ isset($aprendiz-> correoAprend)?$aprendiz-> correoAprend: '' }}">
                    <br>
                        @error('correoAprend')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <div>
            <label for="telefonoAprend"> Telefono </label>
                <input type="text" name="telefonoAprend" id="telefonoAprend" value="{{ isset($aprendiz-> telefonoAprend)?$aprendiz-> telefonoAprend: '' }}">
                    <br>
                        @error('telefonoAprend')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <div>
            <label for="id_ficha"> Fichas </label>
                <select name="id_ficha" id="id_ficha" value="{{ isset($aprendiz-> id_ficha)?$aprendiz-> id_ficha: '' }}">
                    @foreach ($fichas as $ficha)
                        <option value="{{ $ficha['id'] }}">
                            {{ $ficha['numFicha'] }}
                        </option>
                    @endforeach
                </select>
                    <br>
                        @error('id_ficha')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <div>
            <label for="password"> Contraseña </label>
                <input type="text" name="password" id="password" value="{{ isset($aprendiz-> password)?$aprendiz-> password: '' }}">
                    <br>
                        @error('password')
                            <small>{{$message}}</small>
                        @enderror
        </div>
    <br>
        <input type="submit" value="Guardar">
        <br>
    <br>
        <button>
            <a href="{{ url('./')}}">Regresar</a>
        </button>
    </div>

    </center>

</body>
</html>

