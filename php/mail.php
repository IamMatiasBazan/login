<?php 
$para  = 'bazanmatias2004@gmail.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Gracias por registrarte';

// mensaje
$mensaje = '
<html>
<head>
  <meta charset="UTF-8">
  <title>Validación del correo eléctronico</title>
</head>
<body>
  <p>Tu código de verificación es:</p>
  <h2>200231</h2>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>