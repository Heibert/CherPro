<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Administrador</title>
</head>
<center>
    <br>
<body>
    <div>
        <div>
            <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ isset($administradors-> name)?$administradors-> name: '' }}">
                   <br>
                    @error('name') 
                        <small>{{$message}}</small>
                    @enderror
        </div>
        <br>
        <div>
            <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" value="{{ isset($administradors-> apellido)?$administradors-> apellido: '' }}">
                    <br>
                    @error('apellido')
                            <small>{{$message}}</small>
                    @enderror
                        
        </div>
        <br>
        <div>
            <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" value="{{ isset($administradors-> telefono)?$administradors-> telefono: '' }}">
                    <br>
                    @error('telefono')
                        <small>{{$message}}</small>
                    @enderror
        </div>
        <br>
        <div>
            <label for="email">Correo</label>
                <input type="text" name="email" id="email" value="{{ isset($administradors-> email)?$administradors-> email: '' }}">
                    <br>
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror
        </div>
        <br>
        <div>
            <label for="id_programa"> Programas </label>
                <select name="id_programa" id="id_programa" value="{{ isset($administradors-> id_programa)?$administradors-> id_programa: '' }}">
                    @foreach ($programa as $p)
                        <option value="{{ $p['id'] }}">
                            {{ $p['nombrePrograma'] }}
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
            <label for="password">Contraseña</label>
            <input type="text" name="password" id="password" value="{{ isset($administradors-> password)?$administradors-> password: '' }}"><br>
        </div>
        <br>
            <input type="submit" value="Guardar">

    </form>
    </div>
</center>
</body>
</html>


