<?php
session_start(); // ¡Siempre antes de cualquier HTML!
?>
<nav class="navbar-simple">
    <link rel="stylesheet" href="../estilos/navbar.css">
    <div class="navbar-logo">
        <img src="../recursos/logotipo-8.png" alt="DotBox Studio">
        <span>DotBox Studio</span>
    </div>

    <div class="navbar-links">
        <a href="../index.php">Inicio</a>

        <?php if (!isset($_SESSION['nombre'])): ?>
            <a href="../vistas/login.php" class="navbar-button">Iniciar Sesión</a>
        <?php else: ?>
            <span class="navbar-user">Hola, <?php echo htmlspecialchars($_SESSION['nombre']); ?></span>
            <form action="../controladores/logout.php" method="post" style="display:inline;">
                <button type="submit" class="navbar-button logout">Cerrar sesión</button>
            </form>
        <?php endif; ?>
    </div>
</nav>
