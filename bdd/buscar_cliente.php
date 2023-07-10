<?php


require("../conexion/conectar.php");

$dni = $_POST['dni'];


if($dni = "") {
    header("location:../pages/operadores/generar_turno.php");
} else {
    $sql = "SELECT * FROM usuario WHERE Dni = '$dni';";

    $consulta = mysqli_query($conexion, $sql);
    
    
    if(mysqli_num_rows($consulta) === 1) {
        $row = mysqli_fetch_row($consulta);
        setcookie("DNI_CLIENTE", $row[0], time()+3600,"/peluquearte/");
        setcookie("NOMBRE_CLIENTE", $row[1], time()+3600,"/peluquearte/");
        setcookie("APELLIDO_CLIENTE", $row[2], time()+3600,"/peluquearte/");
        header("location:../pages/operadores/generar_turno.php");
    } else {
        header("location:../pages/operadores/generar_turno.php");
    }
}
 





?>