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
                    <img src="../Recursos/Mica.jpg" alt="Foto de presentación" class="profile-photo">
                    <h2>Micaela Cueva</h2>
                </div>
                <div class="card-face card-back">
                    <p>Diseño porque me apasiona dar vida a ideas. Ya sea creando piezas gráficas o modelando en 3D, disfruto el proceso de construir algo desde cero, cuidando cada detalle para que refleje lo que soy y lo que mi cliente busca. Este portafolio es una muestra de eso: de mi gusto por imaginar, probar y crear.</p>
                </div>
            </div>
        </div>
        <div class="bento-item item2">
            <img src="../Recursos/Foto.jpg" alt="Foto de presentación" style="width:100%; height:100%; border-radius:18px; object-fit:cover;">
        </div>
        <div class="bento-item item3">
            <div class="social-links-grid">
                <a href="https://www.instagram.com/mica_0813/" class="social-btn" target="_blank" title="Twitter">
                    <img src="../Recursos/Iconos/instahover.png" alt="Twitter" class="social-icon">
                </a>
                <a href="https://github.com/HMica13" class="social-btn" target="_blank" title="GitHub">
                    <img src="../recursos/Iconos/whatshover.png" alt="GitHub" class="social-icon">
                </a>
                <a href="https://www.linkedin.com/in/micaela-cueva-429b0b273/" class="social-btn" target="_blank" title="LinkedIn">
                    <img src="../Recursos/Iconos/insthover.png" alt="LinkedIn" class="social-icon">
                </a>
                <a href="https://www.facebook.com/micaela.cueva.12/" class="social-btn" target="_blank" title="Facebook">
                    <img src="../Recursos/Iconos/facebookhover.png" alt="Facebook" class="social-icon">
                </a>
            </div>
        </div>
        <div class="bento-item item4">
            <div class="item4-inner1">
                <img src="../Recursos/Negro.png" alt="Foto 1" class="bento-photo">
            </div>
            <div class="item4-inner2">
                <img src="../Recursos/Blanco.png" alt="Foto 2" class="bento-photo">
            </div>
        </div>
        
    </div>
</body>

</html>
