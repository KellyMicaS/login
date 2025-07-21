<?php
session_start(); //Iniciamos la sesión, accedemos a toda las variables de $_session para saber si está logueado o no
?>
<!--Creamos una navbar y le asignamos su estilo-->
<nav class="navbar-simple">
    <link rel="stylesheet" href="../estilos/navbar.css">
    <div class="navbar-logo">
        <img src="../recursos/logotipo-8.png" alt="DotBox Studio">
        <span>DotBox Studio</span>
    </div>
    <!--Aquí le decimos al navbar que enlaces incluir, en este caso: Login, info del usuario logueado o registrarse-->
    <div class="navbar-links">
        <a href="../vistas/index.php">Inicio</a>

        <!--!isset es una función que sirve para verificar si una variable existe o no, devuelve true o false-->
        <!--Para hacer un if en php utilizamos la siguiente estructura para hacer un if en php
        y comprobar toda la info de la variable sesion-->
        <?php if (!isset($_SESSION['nombre'])): ?>
            <a href="../vistas/login.php" class="navbar-button">Iniciar Sesión</a>
        <?php else: ?>
            <span class="navbar-user">Hola, <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
            <form action="../controladores/logout.php" method="post" style="display:inline;">
                <button type="submit" class="navbar-button logout">Cerrar sesión</button>
            </form>
        <?php endif; ?> <!--El endif sirve para cerrar el if, en php es un poco diferente-->
    </div>
</nav>
