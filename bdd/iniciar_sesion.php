<?php

include("../conexion/conectar.php");


$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql_usuario = "SELECT Usuario FROM empleado WHERE Usuario = '$usuario' and contraseña='$password';";

$consulta_usuario = mysqli_query($conexion, $sql_usuario);


if($consulta_usuario) {
    header("location:../turno.php"); 
} else {
    header("location:index.html?error=Verifique sus datos");
}


?>