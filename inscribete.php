<?php
include("conexion.php");
//registrar usuario
if (isset($_POST['registrar'])) {
    // code...
    //$nombre = mysqli_real_escape_string($conexion,$_POST['']);
    $nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
    $pin = mysqli_real_escape_string($conexion,$_POST['pin']);
    $password_encriptada = sha1($pin);
    $sqluser = "SELECT nombre FROM cliente WHERE nombre = '$nombre'";
    $resultadouser = $conexion->query($sqluser);
    $filas = $resultadouser->num_rows;
    if ($filas > 0){
        echo "<script>
              alert('el usuario ya existe');
              window.location = 'index.html';
        </script>";
    }else{
        //insertar informacion del usuario
        $sqlusuarui = "INSERT INTO cliente(nombre,correo,telefono,pin) VALUES ('$nombre','$correo','$telefono','$password_encriptada')";
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
<!--
        <section class="payment">
        <div class="payment2">
            <div class="payTitle">
                <img src="img/pay.svg" alt="Pay illustration">
                <h2>SELECT YOUR PAYMENT METHOD</h2>
                <p>TOTAL: $400.00</p>
            </div>
            <div class="botonesPagar">
                <button class="gpay"><img src="./img/google.svg" alt="G pay icon"></button>
                <button class="paypal"><img src="./img/paypal.svg" alt="Paypal Icon"></button>
                <button class="oxxopay"><img src="./img/oxxo_pay.png" alt="Oxxo pay Icon"></button>
            </div>
        </div>

    </section>
-->

    <main>
        <form action="<?php $_SERVER ["PHP_SELF"]; ?>" method="POST">
            <div class="signup">
                <img src="./img/password.svg" alt="Password illustration">
                <h1>Sign up</h1>
            </div>
            <div>
                <input type="text" name="nombre" placeholder="Introduce tu nombre de usuario:">
            </div>
            <div>
                <input type="text" name="correo" placeholder="Introduce tu correo:">
            </div>
            <div>
                <input type="number" name="numero" placeholder="Introduce tu numero:">
            </div>
            <div>
                <input type="number" name="pin" placeholder="Introduce tu pin (4 Digitos):">
            </div>

            <button class="signUpButton" type="button" onclick="send()">Sign Up</button>
        </form>
    </main>
</body>
<script src="./inscribete.js"></script>
</html>