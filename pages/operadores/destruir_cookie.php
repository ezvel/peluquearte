<?php

setcookie("DNI_CLIENTE", "", time()+3600,"/peluquearte/");
setcookie("NOMBRE_CLIENTE", "", time()+3600,"/peluquearte/");
setcookie("APELLIDO_CLIENTE", "", time()+3600,"/peluquearte/");

header("location:generar_turno.php");

?>