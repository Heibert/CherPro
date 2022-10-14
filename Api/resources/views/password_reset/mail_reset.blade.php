<?php
$para  = 'admin@gmail.com' . ', '; 
$codigo = rand(1000,9999);

// título
$título = 'Cherpro';

// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer contraseña</title>
</head>
<body>
  <h1></h1>
  <div>
    <p>Restablecer ontraseña</p>
    <h3>'.$codigo.'</h3>
  </div>
</body>
</html>
';


// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>