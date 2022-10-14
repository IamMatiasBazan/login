<?php
    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="login";
    
    $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
    
    //$con->close();
    $tablaSecion = "secion";
    if ($conexion -> connect_errno) {
        echo "Nuestro sitio esta experimentando fallos";
        exit();
    }  
?>
