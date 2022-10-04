<?php
    include ('../database/abrir_conexion.php');

    $correo = $_POST['correo'];
    $password = $_POST['contrasenia'];

    if (isset($_POST['btn-iniciar-secion'])) {
        $existe = 0;

        if($correo == "" || $correo == "@" ) {
            echo ("El correo esta vacio, se necesita un arroba");
        } else if ($password == "") {
            echo ("La contraseña esta vacia");
        } else {
            $resultado = mysqli_query($conexion, "SELECT correo, passwor FROM $tablaSecion WHERE correo = '$correo' AND passwor = '$password'");
            while($consulta = mysqli_fetch_array($resultado)) {
                $existe++;
            }

            if($existe == 0) {
                echo "La cuenta no existe";
            } else {
                header("Location: ../bienvenido.php");
                exit();
            }
        }

    }
?>