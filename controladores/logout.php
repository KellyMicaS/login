<?php

//Se inicia la sesión del usuario en el navegador o retoma una anterior que ya existe
session_start();

//Limpia las variables de la sesión pero no la elimina del todo
session_unset();

//Destruye la sesión actual del usuario, ya no puede iniciar (debe volver a iniciar sesión)
session_destroy();

//Redirige al usuario a la página de inicio, sacandolo del área protegida por inicio de sesión
header("Location: ../vistas/index.php");
exit;
