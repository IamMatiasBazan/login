<?php
    $host="localhost";
    $user="id19680197_matias";
    $password="~3[dGw/Hzb?V5H8L";
    $dbname="id19680197_login";

    $tablaSecion = 'secion';

    $conexion = new mysqli($host, $user, $password, $dbname);
    
    if ($conexion -> connect_errno) {
        echo "Nuestro sitio esta experimentando fallos";
        exit();
    }  
?>
