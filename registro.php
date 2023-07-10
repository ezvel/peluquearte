<?php
    require("conexion/conectar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------------------------Fuentes de Google Fonts------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">    
    
    <!-------------------------------Hojas de estilo----------------------------------------->
    <!--variables-->
    <link rel="stylesheet" href="css/01.variables/variables.css">
    <!-----base------>
    <link rel="stylesheet" href="css/02.base/normalize.css">
    <link rel="stylesheet" href="css/02.base/general.css">
    <!--secciones--->
    <!--componentes-->
    <link rel="stylesheet" href="css/04.componentes/form/form.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-titulo.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-datos.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-input.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-label.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-botones.css">
    <link rel="stylesheet" href="css/04.componentes/form/form-botones-boton.css">
    <link rel="stylesheet" href="css/04.componentes/mensaje/mensaje-link.css">   
    
    <title>Peluquería | Registrarse</title>
</head>
<body>
    <main>
        <form class="form" id="Empleado" action="bdd/registrar_usuario.php" method="post" enctype="multipart/form-data">
            <h1 class="form__titulo">Registrarse</h1>
            <div class="form__datos">
                <label class="form__label" for="nombre">Nombre</label>
                <input class="form__input" type="text" id="nombre" name="nombre" required>
                <label class="form__label" for="apellido">Apellido</label>
                <input class="form__input" type="text" id="apellido" name="apellido" required>
                <label class="form__label" for="usuario">Usuario</label>
                <input class="form__input" type="text" id="usuario" name="usuario" required>
                <label class="form__label" for="dni">Número de documento</label>
                <input class="form__input" type="number" id="dni" name="dni" required>
                <label class="form__label" for="password">Contraseña</label>
                <input class="form__input" type="password" id="password" name="password" required>
                <label class="form__label" for="foto-perfil">Foto</label>
                <input class="form__input" type="file" id="foto-perfil" name="foto-perfil" required>
                <select class="form__input" name="nivel" id="nivel">
                    <?php
                        $sql = "SELECT Id, Descripcion FROM nivel;";
                        $consulta = mysqli_query($conexion, $sql);
                       // Comprobar si la consulta tuvo éxito
                        if ($consulta) {
                            // Recorrer todas las filas del resultado
                                while ($row = mysqli_fetch_assoc($consulta)) {
                                    // Crear una opción con el valor del campo id_empleado y el texto del campo Nombre
                                    echo "<option value='" . $row["Id"] . "'>" . $row["Descripcion"] . "</option>";
                                    //echo "<option value='" . $row["id_empleado"] . "'>" . $row["Nombre"] . "</option>";
                                }
                        }
                    ?>
                </select>
            </div>
            <div class="form__botones">
                <input class="form__botones__boton form__botones__boton--resetear" type="reset" value="Resetear">
                <input class="form__botones__boton form__botones__boton--resetear" type="submit" value="Enviar">
            </div>
        </form>
        <p class="mensaje">
            ¿Ya tiene una cuenta? Puede <a class="mensaje__link" href="index.php">iniciar sesión aquí</a>
        </p>
        <?php
            error_reporting(0);
            $valor = $_GET['msj'];
            echo "<p class='opcionAlert' style='visibility: hidden' >". $valor . "</p>";
        ?>
    </main>
    <script type="text/javascript" src="js/formulario.js"></script>
    <script type="text/javascript" src="js/toggle-menu.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>