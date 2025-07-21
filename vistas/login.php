
<?php include 'navbar.php'; ?>
<!--Incluimos el archivo navbar-->

<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DotBox Studio - Login</title>
    <link rel="stylesheet" href="../estilos/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!--Incluimos metacharset, hacemos el diseño responsivo, vinculamos los estilos css y de paso usamos un cdn de fontawesome-->
</head>

<body>
    <!--Imagen del fondo-->
    <img src="../recursos/Recurso 6-8.png" alt="artefondo" class="bg-art" />
    <!--Cotenedor principal de logo y text-->
    <div class="login-container">
        <div class="logo" style="align-self: center; margin-bottom: 2.2rem; margin-top: -1.2rem;">
            <img src="../recursos/logotipo-8.png" alt="DotBox Studio" style="width: 24px; height: 24px;" />
            DotBox Studio
        </div>

        <h2>Bienvenido</h2>
        <!--Creamos un formulario y lo procesamos mediante el método post hacia el procesar_login.php-->
        <form action="../controladores/procesar_login.php" method="POST" style="width: 100%;">
            <div class="input-group">
                <input type="text" name="login" placeholder="Ingresar Correo o Usuario" required />
                <i class="fa-solid fa-user icon-valid"></i>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Ingresar Contraseña" required />
                <i class="fa-solid fa-lock icon-invalid"></i>
            </div>

            <button type="submit" class="login-btn">Iniciar Sesión</button>
        </form>

        <!--Si el usuario no tiene cuenta, debe ir a registrarse-->
        <a href="registro.php" class="link"
            style="margin-top: 1.5rem; display: block; text-align: center; color: #aaa;">
            ¿No tienes cuenta? Regístrate
        </a>
    </div>
</body>

</html>