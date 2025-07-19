<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DotBox Studio - Login</title>
    <link rel="stylesheet" href="../estilos/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body>
    <img src="../recursos/Recurso 6-8.png" alt="Arte decorativo" class="bg-art" />

    <div class="login-container">
        <div class="logo" style="align-self: center; margin-bottom: 2.2rem; margin-top: -1.2rem;">
            <img src="../recursos/logotipo-8.png" alt="DotBox Studio" style="width: 24px; height: 24px;" />
            DotBox Studio
        </div>

        <h2>Bienvenido</h2>

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


        <a href="registro.php" class="link"
            style="margin-top: 1.5rem; display: block; text-align: center; color: #aaa;">
            ¿No tienes cuenta? Regístrate
        </a>
    </div>
</body>

</html>