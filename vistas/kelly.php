<?php
require 'header-kelly.php';

// Verifica si la sesión ya está iniciada antes de llamar session_start()
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['nombre'])) {
    header("Location: ../vistas/login.php");
    exit();
}
?>

<body class="body">
    <?php require 'navbar.php'; ?>
    <div class="bento-grid">

        <!-- Carta principal con flip -->
        <div class="bento-item item1">
            <div class="card" tabindex="0">
                <div class="card-face card-front">
                    <img src="../recursos/kellycv.png" alt="Foto de presentación" class="profile-photo">
                    <h2>Kelly Solano</h2>
                </div>
                <div class="card-face card-back">
                    <p>Animadora Multimedia, apasionada por el diseño de personajes y los videojuegos. Me gusta
                        compartir mi forma de ver al mundo a través de mi creatividad y mis proyectos ¡Bienvenido a mi
                        portafolio!</p>
                </div>
            </div>
        </div>

        <!-- Video presentación -->
        <div class="bento-item item2">
            <video class="presentation-video" controls poster="../recursos/poster.jpg"
                style="width:100%;height:100%;border-radius:18px;object-fit:cover;">
                <source src="../recursos/rmtrails.mp4" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </div>

        <!-- Redes sociales -->
        <div class="bento-item item3">
            <div class="social-links-grid">
                <a href="https://www.instagram.com/kairicreative/" class="social-btn instagram" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.whatsapp.com/channel/0029VbBO7Bs8V0tkpUx62g3A" class="social-btn whatsapp" target="_blank" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://www.linkedin.com/in/kelly-solano-profile/" class="social-btn linkedin" target="_blank" title="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.facebook.com/micaeladl88" class="social-btn facebook" target="_blank" title="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
        </div>

        <!-- Cartas con efecto flip -->
        <div class="bento-item item4" style="display:flex; gap: 1rem;">

            <div class="item4-inner1" tabindex="0">
                <div class="card-outer">
                    <div class="card-face-inner card-front">
                        <img src="../recursos/kairilogo.png" alt="Foto 1" class="bento-photo">
                    </div>
                    <div class="card-face-inner card-back">
                        <p>Descripción o texto para la primera imagen.</p>
                    </div>
                </div>
            </div>

            <div class="item4-inner2" tabindex="0">
                <div class="card-outer">
                    <div class="card-face-inner card-front">
                        <img src="../recursos/cricrifood.png" alt="Foto 2" class="bento-photo">
                    </div>
                    <div class="card-face-inner card-back">
                        <p>Descripción o texto para la segunda imagen.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>
