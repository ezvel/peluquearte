<?php

include("../conexion/conectar.php");


$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql_usuario = "SELECT Usuario, Id_nivel, Nombre, Apellido, Ruta FROM usuario WHERE Usuario = '$usuario' and Contraseña='$password';";

$consulta_usuario = mysqli_query($conexion, $sql_usuario);



if($registro = mysqli_num_rows($consulta_usuario) === 1) {
	session_start();


	setcookie("USUARIO",$usuario, time()+3600,"/peluquearte/");
	$row = mysqli_fetch_row($consulta_usuario);

	$usuario = $row[0];
	$nombre = $row[2];
	$apellido = $row[3];
	$ruta = $row[4];
	$_SESSION['nombre'] = $nombre;
	$_SESSION['apellido'] = $apellido;
	$_SESSION['foto'] = $ruta;
	$_SESSION['usuario'] = $usuario; 

	echo $ruta;

	switch ($row[1]) {
		case 3: header("location:../pages/administradores/mi_perfil.php"); break;
		case 2: header("location:../pages/operadores/mi_perfil.php"); break;
		case 1: header("location:../pages/peluqueros/mi_perfil.php"); break;
	}	
	 
} else {
	header("location:../index.php?msj=error1");
}


?>