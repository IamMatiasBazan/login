<?php
    $host="sql100.epizy.com";
    $user="epiz_32740930";
    $password="uxX5As5Kf20jog";
    $dbname="epiz_32740930_login";

    $tablaSecion = 'secion';

    $conexion = new mysqli($host, $user, $password, $dbname);
    
    if ($conexion -> connect_errno) {
        echo "Nuestro sitio esta experimentando fallos";
        exit();
    }  
?>
