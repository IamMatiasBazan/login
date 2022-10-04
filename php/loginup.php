<?php
    include("../database/abrir_conexion.php");

    $btn = $_POST['btn-crear-cuenta'];
    $correo = $_POST['correo'];
    $password = $_POST['contrasenia'];

    if(isset($btn)) {
        if($correo == "" || $password == "") {
            echo "Rellene los campos";
        } else {
            mysqli_query($conexion, "INSERT INTO $tablaSecion(correo, passwor) 
            VALUES ('$correo','$password')");
            echo '<div class="alert alert-success" role="alert">
                    Cuenta creada con exito. <a href="../login.html" class="alert-link">INICIA SECION</a>
                  </div>';
        }
    }
?>