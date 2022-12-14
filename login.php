<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    
    <!-- INICIANDO BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CERRANDO BOOTSTRAP -->

    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body class="text-center">    
    <main class="form-signin w-100 m-auto">
      <?php
        if (isset($_POST['btn-iniciar-secion'])) {
          require 'database/abrir_conexion.php';
          session_start();

          $correo = $_POST['correo'];
          $password = $_POST['contrasenia'];

          if($correo == "" || $password == "" ) {
            echo '<div class="alert alert-danger" role="alert">
                    Rellene los campos.
                  </div>';
          } else {
            $q = "SELECT COUNT(*) AS contar FROM $tablaSecion WHERE correo = '$correo' AND passwor = '$password'";
            $consulta = mysqli_query($conexion, $q);
            $array = mysqli_fetch_array($consulta);
              
            if($array['contar'] > 0) {
              $_SESSION['correo'] = $correo;
              echo "<script>
                      window.location.href='bienvenido.php'
                    </script>";
            } else {
              echo '<div class="alert alert-danger" role="alert">
                      Datos incorrectos.
                    </div>';
            }
          }

        }
      ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <img class="mb-4" src="img/carrito-de-compras.png" alt="" width="72" height="70">
        <h1 class="h3 mb-3 fw-normal">LOGIN</h1>

        <div class="form-floating">
          <input type="email" class="form-control" name="correo" placeholder="name@example.com">
          <label>Email address</label>
        </div>
        
        <div class="form-floating">
          <input type="password" class="form-control" id="eye" name="contrasenia" placeholder="Password">
          <svg xmlns="http://www.w3.org/2000/svg" onclick="mostrarPassword()" width="25" height="25" fill="currentColor" id="eyePassword" class="bi bi-eye-fill" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          </svg>
          <label>Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" name="btn-iniciar-secion" type="submit">Sign is</button>
        <a href="index.php" id="cuentaNueva"> 
          <p>??Eres nuevo?</p>
        </a>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
      </form>
    </main>
    <script src="js/eye.js"></script>   
    <script src="https://kit.fontawesome.com/6afd40dbde.js" crossorigin="anonymous"></script>
  </body>
</html>