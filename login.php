<?php
include("conexion.php");
session_start();
if (isset($_SESSION['nombre'])) {
    header("location: login.php");
}
//login usuario
if (!empty($_GET)) {
    $nombre =  mysqli_real_escape_string($conexion,$_GET['nombre']);
    $pin = mysqli_real_escape_string($conexion,$_GET['pin']);
    $password_encriptada = sha1($pin);
    $sql = "SELECT nombre FROM cliente5 WHERE nombre = '$nombre' and pin = '$password_encriptada' ";
    $resultado = $conexion->query($sql);
    $rows = $resultado->num_rows;
    if ($rows > 0) {
        // code...
        $row = $resultado->fetch_assoc();
        $_SESSION['nombre']=$row["nombre"];
        header("location: perfil.php");

    }else{
        echo "<script>
                alert('nombre o pin incorrecto');
                window.location = 'index.html';
              </script>";  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <main>
        <form action="<?php $_SERVER ["PHP_SELF"]; ?>" method="get">
            <div class="signup">
                <img src="./img/profiles.svg" alt="Password illustration">
                <h1>Sign In</h1>
            </div>
            <div>
                <input class="username input" required type="text" name="nombre" placeholder="Introduce tu nombre de usuario:">
            </div>

            <div>
                <input class="pin input" required type="number" name="pin" placeholder="Introduce tu pin (4 Digitos):">
            </div>

            <p class="errorDatos">Por favor completa los campos</p>

             <input type="submit" class="signUpButton" value="enviar">

        </form>
    </main>
</body>

<script src="./login.js"></script>
</html>