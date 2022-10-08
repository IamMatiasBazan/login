<?php
    $host="localhost";
    $user="id19680197_matias";
    $password="m>I/1+V<@<v(\=gA";
    $dbname="id19680197_login";

    $tablaSecion = 'secion';

    $conexion = new mysqli($host, $user, $password, $dbname);
    
    if ($conexion -> connect_errno) {
        echo "Nuestro sitio esta experimentando fallos";
        exit();
    }  
?>
