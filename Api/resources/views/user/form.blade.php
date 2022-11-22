<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
</head>
<body>
    <div>
        <div>
            <label for="name"> Nombre </label>
            <div>
                <input type="text" name="name" id="name" value="{{ isset($user-> name)?$user-> name: '' }}"> 
            </div>
            @error('name') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="apellido"> Apellido </label>
            <div>
                <input type="text" name="apellido" id="apellido" value="{{ isset($user-> apellido)?$user-> apellido: '' }}"> 
            </div>
            @error('apellido') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="telefono"> Telefono </label>
            <div>
                <input type="text" name="telefono" id="telefono" value="{{ isset($user-> telefono)?$user-> telefono: '' }}"> 
            </div>
            @error('telefono') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="email"> Correo </label>
            <div>
                <input type="text" name="email" id="email" value="{{ isset($user-> email)?$user-> email: '' }}"> 
            </div>
            @error('email') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="password"> Contraseña </label>
            <div>
                <input type="text" name="password" id="password" value="{{ isset($user-> password)?$user-> password: '' }}"> 
            </div>
            @error('password') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="password_confirmation"> Confirmar contraseña </label>
            <div>
                <input type="text" name="password_confirmation" id="password_confirmation" value="{{ isset($user-> password_confirmation)?$user-> password_confirmation: '' }}"> 
            </div>
            @error('password_confirmation') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
        <div>
            <label for="rol"> Rol </label>
            <div>
                <input type="text" name="rol" id="rol" value="{{ isset($user-> rol)?$user-> rol: '' }}"> 
            </div>
            @error('rol') 
                <small> {{$message}} </small> 
            @enderror
        </div>
        <br>
            <div>
                <input type="submit" value="Guardar">
            </div>
    </div>
</body>
</html>