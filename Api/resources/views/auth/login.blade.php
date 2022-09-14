@extends('layouts.app')

    @section('title', 'Login')
    @section('content')
    @vite(['resources/css/app.css'])

    <div class="">

        <h1 class="">Iniciar sesion</h1>

        <form class="" action="" method="POST">

        @csrf

            <label for="">Gmail
            </label><br>
            <input type="email" class="" name="email" id="email">
            <br>

            <label for="">Contraseña
            </label><br>
            <input type="password" class="" name="password" id="password">
            <br>

        <button type="submit" class="" name="">Ingresar</button>

        </form>

    </div>


    @endsection