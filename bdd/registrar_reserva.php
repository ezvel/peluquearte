<?php 
    include("../conexion/conectar.php");
    
    setcookie("DNI_CLIENTE", "", time()+3600,"/peluquearte/");
    setcookie("NOMBRE_CLIENTE", "", time()+3600,"/peluquearte/");
    setcookie("APELLIDO_CLIENTE", "", time()+3600,"/peluquearte/");

    $dni = $_POST['dni'];
    $fecha = $_POST['fecha']; 
    $hora = $_POST['hora'];
    $reservado = 1;
    $dni_peluquero = $_POST['dni_peluquero'];

    $sql_insert = "INSERT INTO reserva (Dni, Dia, Hora, Id_estado, Dni_peluquero, Dni_cliente) VALUES ('$dni','$fecha','$hora','$reservado','$dni_peluquero', '$dni');";
    
    $insertar_reserva = mysqli_query($conexion, $sql_insert);

    if($insertar_reserva) {
        header("location:../pages/operadores/generar_turno.php?msj=ok");
    } else {
        header("location:../pages/operadores/generar_turno2.php?msj=error");
    }

?>
