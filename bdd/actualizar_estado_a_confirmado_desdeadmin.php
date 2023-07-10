<?php

include('../conexion/conectar.php');

$id_reserva = $_GET['id_reserva'];

$sql_actualizar = "UPDATE reserva SET Id_estado = 2 WHERE Id = '$id_reserva'";

mysqli_query($conexion, $sql_actualizar);

header("location:../pages/administradores/consultar_turnos.php");

?>