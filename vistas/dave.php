<?php 
require 'header.php'; 
require 'navbar.php'; 
session_start();
if (!isset($_SESSION['nombre'])) {
    header("Location: ../vistas/login.php");
    exit();
}
?>
<body class="body">   
    <div class="bento-grid">
        <div class="bento-item item1">
            <div class="card">
                <div class="card-face card-front">
                    <img src="../recursos/freddy.jpg" alt="Foto de presentación" class="profile-photo">
                    <h2>Dave Quintero</h2>
                </div>
                <div class="card-face card-back">
                    <p>Diseñador apasionado por la creacion de experiencias innovadoras, ya sea en relación de creacion de piezas graficas u modelados 3d, mi pasion es poder crear algo desde cero y que me guste tanto a mi como a mi cliente. ¡Bienvenido a mi portafolio!</p>
                </div>
            </div>
        </div>
        <div class="bento-item item2">
            <video class="presentation-video" controls poster="recursos/poster.jpg" style="width:100%;height:100%;border-radius:18px;object-fit:cover;">
                <source src="../recursos/KOID THE CYBERFROG.mp4" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </div>
        <div class="bento-item item3">
            <div class="social-links-grid">
                <a href="https://www.instagram.com/dave_45y/" class="social-btn" target="_blank" title="Twitter">
                    <img src="../recursos/Iconos/instahover.png" alt="Twitter" class="social-icon">
                </a>
                <a href="https://whatsapp.com/channel/0029VbAj46WBVJl4ExwhEM1u" class="social-btn" target="_blank" title="GitHub">
                    <img src="../recursos/Iconos/whatshover.png" alt="GitHub" class="social-icon">
                </a>
                <a href="https://www.linkedin.com/in/david-quintero-b76223313/" class="social-btn" target="_blank" title="LinkedIn">
                    <img src="../recursos/Iconos/insthover.png" alt="LinkedIn" class="social-icon">
                </a>
                <a href="https://www.facebook.com/david.smith.296242/" class="social-btn" target="_blank" title="Facebook">
                    <img src="../recursos/Iconos/facebookhover.png" alt="Facebook" class="social-icon">
                </a>
            </div>
        </div>
        <div class="bento-item item4">
            <div class="item4-inner1">
                <img src="../recursos/CRIKET@2x.png" alt="Foto 1" class="bento-photo">
            </div>
            <div class="item4-inner2">
                <img src="../recursos/General lateral izq.png" alt="Foto 2" class="bento-photo">
            </div>
        </div>
        
    </div>
</body>

</html>