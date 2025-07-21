<?php
require 'header.php';
require 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<!-- Contenido principal de la nueva página -->

<body class="body">
    <div style="color: aliceblue; text-align: center; margin-top: 4rem;">
        <h1 style="font-size: 3.5rem; letter-spacing: 1px; font-weight: bold;">
            <?php
            if (isset($_SESSION['nombre'])) {
                echo 'Bienvenido/a ' . htmlspecialchars($_SESSION['nombre']);
            } else {
                echo 'Bienvenido/a';
            }
            ?>
        </h1>


    </div>

    <div style="color: aliceblue; text-align: center; margin: 2rem 0 1.5rem 0;">
        <p>Mira de lo que es capaz el equipo de DotBox Studio</p>
    </div>

    <div class="integrantes-grid-outer">
        <div class="integrantes-grid">
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../recursos/freddy.jpg" alt="Integrante 1" class="integrante-photo">
                    <div class="integrante-name">David Quintero</div>
                    <a href="dave.php"><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../recursos/kellycv.png" alt="Integrante 2" class="integrante-photo">
                    <div class="integrante-name">Kelly Solano</div>
                    <!--Aqui va el link de tu pagina portafolio-->
                    <a href="kelly.php"><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../recursos/Mica.jpg" alt="Integrante 3" class="integrante-photo">
                    <div class="integrante-name">Micaela Cueva</div>
                    <!--Aqui va el link de tu pagina portafolio-->
                    <a href="mica.php"><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
            <div class="integrante-card">
                <div class="integrante-content">
                    <img src="../recursos/jhonperfil.jpg" alt="Integrante 4" class="integrante-photo">
                    <div class="integrante-name">Jhon Loyola</div>
                    <!--Aqui va el link de tu pagina portafolio-->
                    <a href="jhon.php"><button class="integrante-portfolio-btn">Ver portafolio</button></a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>