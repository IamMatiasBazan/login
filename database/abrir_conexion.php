<?php
    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="login";

    $tablaSecion = 'secion';

    $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket);
    
    if ($conexion -> connect_errno) {
        echo "Nuestro sitio esta experimentando fallos";
        exit();
    }  
?>
