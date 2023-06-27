 <//?php
include("configuracion.php");
$conexion = new mysqli($server,$user,$pass,$bd);

 if (mysqli_connect()) {
	echo "no conectado", mysqli_connect_error();
	exit();
}else{
	echo "conectado";
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdgymmorelos";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}else{
	echo "conexion exitosa";
}
?>