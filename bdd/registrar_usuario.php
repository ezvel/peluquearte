<?php

require("../conexion/conectar.php");

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$nivel = $_POST['nivel'];
//imagen
$nombre_imagen = $_FILES['foto-perfil']['name'];

$carpeta_destino = "../assets/imagenes/users";

$ruta_destino = $carpeta_destino . "/" . $nombre_imagen;
$ruta_acceso = "../../assets/imagenes/users/" . $nombre_imagen;

copy($_FILES['foto-perfil']['tmp_name'], $ruta_destino);


$sql_select = "SELECT Usuario FROM usuario WHERE Usuario = '$usuario'";

$consulta_select = mysqli_query($conexion, $sql_select);
if (mysqli_num_rows($consulta_select) == 0) {
    $sql = "INSERT INTO usuario VALUES ('$dni','$nombre', '$apellido', '$usuario', '$password', '$nivel', '$ruta_acceso')";
    $consulta = mysqli_query($conexion, $sql);
    if($consulta) {
        header("location:../registro.php?msj=ok");
    } else {
        header("location:../registro.php?msj=error1");
    }
}
else {
    header("location:../registro.php?msj=error2");
}






?>