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
    <link rel="stylesheet" href="css/03.secciones/main.css">   
  

    <title>Peluquearte | Iniciar sesión</title>
</head>
<body>
    <main class="main-logueo">
        <form class="form-logueo" action="bdd/iniciar_sesion.php" method="POST">
            <h1 class=form__titulo>Iniciar sesión</h1>
            <div class="form__datos">
                <label class="form__label" for="usuario">Usuario</label>
                <input class="form__input" type="text" id="usuario" name="usuario" required>
                <label class="form__label" for="password">Contraseña</label>
                <input class="form__input" type="password" id="password" name="password" required>
            </div>
            <div class="form__botones">
                <input class="form__botones__boton form__botones__boton--resetear" type="reset" value="Resetear">
                <input class="form__botones__boton form__botones__boton--enviar" type="submit" value="Iniciar sesión">
            </div>       
        </form>      
        <p class="mensaje" style="text-align:center"> 
            ¿No tienes una cuenta?<a class="mensaje__link" href="registro.php"> Puede registrarse aquí</a>
        </p>
        <?php
            error_reporting(0);
            $valor = $_GET['msj'];
            echo "<p class='opcionAlert' style='visibility: hidden' >". $valor . "</p>";
        ?>
    </main>
    <script type="text/javascript" src="js/formulario.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>