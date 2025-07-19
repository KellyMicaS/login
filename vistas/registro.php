<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  <link rel="stylesheet" href="../estilos/registro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" type="image/png" href="../recursos/favicon.ico">
</head>
<body>
  <div class="registro-container">
    <div class="form-section">
      <!-- Logo en la parte superior del formulario -->
      <div class="logo">
        <img src="../recursos/favicon.ico" alt="DotBox Studio">
        <span>DotBox Studio</span>
      </div>

      <h2>Registro</h2>
      <form action="../controladores/procesar_registro.php" method="POST">
        <div class="input-wrapper">
          <i class="fa fa-user"></i>
          <input type="text" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="input-wrapper">
          <i class="fa fa-user"></i>
          <input type="text" name="apellido" placeholder="Apellido" required>
        </div>
        <div class="input-wrapper">
          <i class="fa fa-user-circle"></i>
          <input type="text" name="usuario" placeholder="Usuario" required>
        </div>
        <div class="input-wrapper">
          <i class="fa fa-envelope"></i>
          <input type="email" name="correo" placeholder="Correo" required>
        </div>
        <div class="input-wrapper">
          <i class="fa fa-lock"></i>
          <input type="password" name="contrasena" placeholder="Contraseña" required>
        </div>
        <input type="submit" value="Registrarse" class="boton">
      </form>
      <a href="login.php" class="link">¿Ya tienes cuenta? Inicia Sesión</a>
    </div>

    <!-- Imagen grande decorativa a la derecha -->
    <div class="imagen-section">
      <img src="../recursos/logotipo-8.png" alt="DotBox Studio">
    </div>
  </div>
</body>
</html>
