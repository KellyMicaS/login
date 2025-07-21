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
                    <img src="../recursos/jhonperfil.jpg" alt="Foto de presentación" class="profile-photo">
                    <h2>Jhon Loyola</h2>
                </div>
                <div class="card-face card-back">
                    <p>Desarrollo proyectos que integran diseño gráfico, modelado 3D, fotografía, edición audiovisual y programación junior. Impulso ideas a través de mis marcas: Jhoins Producción Multimedia (personal) y Los Sak’ Pulmones (grupal), llevando visión y originalidad a cada propuesta.
. ¡Bienvenido a mi portafolio!</p>
                </div>
            </div>
        </div>
        <div class="bento-item item2">
            <video class="presentation-video" controls poster="../recursos/poster.jpg" style="width:100%;height:100%;border-radius:18px;object-fit:cover;">
                <source src="../recursos/introskp.mp4" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </div>
        <div class="bento-item item3">
            <div class="social-links-grid">
                <a href="https://www.instagram.com/jhoiinsbates/" class="social-btn" target="_blank" title="Twitter">
                    <img src="../recursos/iconos/instahover.png" alt="Instagram" class="social-icon">
                </a>
                <a href="https://wa.me/593_0997359981/" class="social-btn" target="_blank" title="GitHub">
                    <img src="../recursos/iconos/whatshover.png" alt="Whasapp" class="social-icon">
                </a>
                <a href="https://www.linkedin.com/in/jhon-loyola-91714916a/" class="social-btn" target="_blank" title="LinkedIn">
                    <img src="../recursos/iconos/insthover.png" alt="LinkedIn" class="social-icon">
                </a>
                <a href="https://www.facebook.com/JHONMASTERMC/" class="social-btn" target="_blank" title="Facebook">
                    <img src="../recursos/iconos/facebookhover.png" alt="Facebook" class="social-icon">
                </a>
            </div>
        </div>
        <div class="bento-item item4">
            <div class="item4-inner1">
                <img src="../recursos/TAG SKP.png" alt="Foto 1" class="bento-photo">
            </div>
            <div class="item4-inner2">
                <img src="../recursos/jhoinsproduccion.png" alt="Foto 2" class="bento-photo">
            </div>
        </div>
        
    </div>
</body>

</html>