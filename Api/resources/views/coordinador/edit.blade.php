<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar coordinador</title>
</head>
<body>
    <form action="{{ url ('/coordinador/'.$coordinador->id)}}" method="post">
        @csrf 
        {{ method_field('PATCH' )}}
        <nav>
            <a href="{{url('coordinador')}}"> Volver </a>
        </nav>
        <br>
        <div>
            <center>
                <div>
                    <label for="nomCoordinador">Nombre Coordinador</label><br>
                        <input type="text" value="{{ isset($coordinador->nomCoordinador)?$coordinador->nomCoordinador:''}}" name="nomCoordinador" id="nomCoordinador">
                            <br>
                            @error('nomCoordinador')
                                <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <label for="apeCoordinador">Apellido Coordinador</label><br>
                        <input type="text" value="{{ isset($coordinador->apeCoordinador)?$coordinador->apeCoordinador:''}}" name="apeCoordinador" id="apeCoordinador">
                            <br>
                            @error('apeCoordinador')
                                    <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <label for="tipoDoc">Tipo de documento</label><br>
                        <select name="tipoDoc" id="tipoDoc" value="{{ isset($coordinador->tipoDoc)?$coordinador->tipoDoc:''}}">
                            <option name="tipoDoc" value="CC">CC</option>
                            <option name="tipoDoc" value="CI">CI</option>
                        </select>
                            <br> 
                                @error('tipoDoc')
                                        <small>{{$message}}</small>
                                @enderror
                </div>
                <br>
                <div>
                    <label for="numDoc">Número de documento</label><br>
                            <input type="number" value="{{isset($coordinador->numDoc)?$coordinador->numDoc:''}}" name="numDoc" id="numDoc">
                                <br>
                                @error('numDoc')
                                        <small>{{$message}}</small>
                                @enderror   
                </div>
                <br>
                <div>  
                    <label for="correoMisena">Correo Misena</label><br>
                        <input type="emile" value="{{ isset($coordinador->correoMisena)?$coordinador->correoMisena:''}}" name="correoMisena" id="correoMisena">
                            <br>
                            @error('correoMisena')
                                    <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <label for="telefonoCoordinador">Telefono</label><br>
                        <input type="number" name="telefonoCoordinador" id="telefonoCoordinador" value="{{ isset($coordinador->telefonoCoordinador)?$coordinador->telefonoCoordinador:'' }}">      
                            <br>
                            @error('telefonoCoordinador')
                                    <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <label for="id_coordinacion"> Coordinación </label><br>
                        <select name="id_coordinacion" id="id_coordinacion" value="{{ isset($coordinador-> id_coordinacion)?$coordinador-> id_coordinacion: ''}}">
                            @foreach ($coordinacions as $coordinacion)
                                <option value="{{ $coordinacion['id'] }}">
                                    {{ $coordinacion['nomCoordinacion'] }}
                                </option>
                            @endforeach
                        </select> 
                            <br>
                            @error('id_coordinacion')
                                    <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <label for="password">Contraseña</label><br>
                        <input type="text" name="password" id="password" value="{{ isset($coordinador-> password)?$coordinador-> password:'' }}"> 
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



