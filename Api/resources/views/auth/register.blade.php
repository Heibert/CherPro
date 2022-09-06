@extends('layouts.app')

    @section('title', 'Register')
    @section('content')
    <div>
        <h1>Registrarse</h1>

        <form class="" action="" method="POST">

            @csrf

            <label for="name">Nombre
            </label><br>
            <input type="text" class="" name="name" id="name" placeholder="name">
            <br>

            <label for="apellido">apellido
            </label><br>
            <input type="text" class="" name="apellido" id="apellido" placeholder="apellido">
            <br>

            <label for="telefono">Telefono
            </label><br>
            <input type="number" class="" name="telefono" id="telefono" placeholder="Número de telefono">
            <br>
            <label for="Correo">Correo
            </label><br>
            <input type="email" class="" name="email" id="email" placeholder="Correo">
            <br>

            <label for="password">Contraseña
            </label><br>
            <input type="password" class="" name="password" id="password" placeholder="Contraseña">
            <br>

            <label for="password_confirmation">Contraseña
            </label><br>
            <input type="password" class="" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
            <br>

        <button type="submit" class="" name="" id="">Ingresar</button>

    </div>
    @endsection