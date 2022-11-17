<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/login-auth.css')}}">
    <title>Restablecer cobtraseña</title>
</head>
<body>
    <main class="recuperar-main">
        <div class="recuperar-container">
        <div class="message-recuperar">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <label for="email" :value="__('Email')">
                <input type="text" id="email" class="recuperar-input" type="email"  name="email" :value="old('email')" required autofocus />
            </div>
            <div class="recuperar-button">
                <button type="submit">
                    {{ __('Confirmar') }}
                </button>
            </div>
        </form>
        </div>
    </main>
</body>
</html>
