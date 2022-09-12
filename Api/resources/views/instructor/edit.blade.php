<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar instructor</title>
</head>
<body>
    <form action="{{ url('/instructor/'.$instructor->id) }}" method='post' enctype="multipart/form-data"> 
        @csrf
        {{ method_field('PATCH') }}
        <nav>
            <a href="{{ url('instructor') }}"> Volver </a>
        </nav>
        <br>
        <div>
            <center>
                <div>
                    <label for="nombreInst"> Nombre del Instructor </label>
                        <input type="text" name="nombreInst" id="nombreInst" value="{{ isset($instructor-> nombreInst)?$instructor-> nombreInst: '' }}">
                        <br>
                        @error('nombreInst')
                                <small>{{$message}}</small>
                        @enderror
                </div>
                <br>
                <div>
                    <label for="apellidoInst"> Apellido del Instructor </label>
                        <input type="text" name="apellidoInst" id="apellidoInst" value="{{ isset($instructor-> apellidoInst)?$instructor-> apellidoInst: '' }}">
                            <br>
                        @error('apellidoInst')
                            <small>{{$message}}</small>
                        @enderror
                </div>
                <br>
                <div>
                    <label for="tipoDoc"> Tipo de documento </label>
                        <input type="text" name="tipoDoc" id="tipoDoc" value="{{ isset($instructor-> tipoDoc)?$instructor-> tipoDoc: '' }}">
                            <br>
                            @error('tipoDoc')
                                <small>{{$message}}</small>
                            @enderror
                </div>
                <br>

                <div>
                    <label for="numDoc"> Número de documento </label>
                        <input type="number" name="numDoc" id="numDoc" value="{{ isset($instructor-> numDoc)?$instructor-> numDoc: '' }}">
                            <br>
                                @error('numDoc')
                                    <small>{{$message}}</small>
                                @enderror
                </div>
                <br>
                <div>
                    <label for="correoMisena"> Correo Misena </label>
                        <input type="text" name="correoMisena" id="correoMisena" value="{{ isset($instructor-> correoMisena)?$instructor-> correoMisena: '' }}">
                            <br>
                            @error('correoMisena')
                                    <small>{{$message}}</small>
                            @enderror
                </div>
                <br>
                <div>
                    <label for="telefonoInst"> Telefono </label>
                        <input type="text" name="telefonoInst" id="telefonoInst" value="{{ isset($instructor-> telefonoInst)?$instructor-> telefonoInst: '' }}">
                            <br>
                                @error('telefonoInst')
                                    <small>{{$message}}</small>
                                @enderror
                </div>
                <br>
                <div>
                    <label for="id_programa"> Programas </label>
                        <select name="id_programa" id="id_programa" value="{{ isset($instructor-> id_programa)?$instructor-> id_programa: '' }}">
                            @foreach ($programas as $pa)
                                <option value="{{ $pa['id'] }}">
                                    {{ $pa['nombrePrograma'] }}
                                </option>
                            @endforeach
                        </select>
                </div>
                <br>
                <div>
                    <label for="password"> Contraseña </label>
                        <input type="text" name="password" id="password" value="{{ isset($instructor-> password)?$instructor-> password: '' }}">
                            <br>
                        @error('password')
                            <small>{{$message}}</small>
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
