<?php
include("conexion.php");
//registrar usuario
if (isset($_GET['registrar'])) {
    // code...
    //$nombre = mysqli_real_escape_string($conexion,$_POST['']);
    echo "registrando";
    $nombre = mysqli_real_escape_string($conexion,$_GET['nombre']);
    $correo = mysqli_real_escape_string($conexion,$_GET['correo']);
    $telefono = mysqli_real_escape_string($conexion,$_GET['telefono']);
    $pin = mysqli_real_escape_string($conexion,$_GET['pin']);
    $password_encriptada = sha1($pin);
    $sqluser = "SELECT nombre FROM cliente5 WHERE nombre = '$nombre'";
    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser->num_rows;
    if ($filas > 0){
        echo "<script>
              alert('el usuario ya existe');
              window.location = 'index.html';
        </script>";
    }else{
        //insertar informacion del usuario
        $sqlusuario = "INSERT INTO cliente5(nombre,correo,telefono,pin) VALUES ('$nombre','$correo','$telefono','$password_encriptada')";
        $resultadousuario = $conexion->query($sqlusuario);
        if ($resultadousuario > 0){
        echo "<script>
            alert('registro exitoso');
            window.location = 'index.html';
        </script>";
        }else{
            echo "<script>
            alert('error al registrarse');
            window.location = 'index.html';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="inscribete.css">
</head>
<body>
    <main>
        <form action="<?php $_SERVER ["PHP_SELF"]; ?>" method="get">
            <div class="signup">
                <img src="./img/password.svg" alt="Password illustration">
                <h1>Sign up</h1>
            </div>
            <div>
                <input class="username" type="text" name="nombre" placeholder="Introduce tu nombre de usuario:">
            </div>
            <div>
                <input class="email" type="text" name="correo" placeholder="Introduce tu correo:">
            </div>
            <div>
                <input class="telefono" type="text" name="telefono" placeholder="Introduce tu numero:">
            </div>
            <div>
                <input class="pin" type="number" name="pin" min="-9999" max="9999" placeholder="Introduce tu pin (4 Digitos):">
            </div>


            <p class="errorDatos">Por favor completa los campos</p>
            <input type="hidden" name="registrar">
            <input type="submit" class="signUpButton" value="enviar">
        </form>
    </main>
</body>
<script src="./inscribete.js"></script>
</html>