<?php
require_once "../modelos/Usuario.php";

// Obtener datos del formulario
$nombre     = trim($_POST['nombre']);
$apellido   = trim($_POST['apellido']);
$usuario    = trim($_POST['usuario']);
$correo     = trim($_POST['correo']);
$contrasena = $_POST['contrasena'];
$rol        = 'usuario'; // Valor por defecto

$usuarioModel = new Usuario();

// Verificar si ya existe un usuario o correo
if ($usuarioModel->existeUsuarioOCorreo($usuario, $correo)) {
    echo "<script>alert('El usuario o correo ya está registrado.'); window.location='../vistas/registro.php';</script>";
    exit;
}

// Hashear la contraseña
$hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Registrar nuevo usuario
if ($usuarioModel->registrarUsuario($nombre, $apellido, $usuario, $correo, $hash, $rol)) {
    echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location='../vistas/login.php';</script>";
} else {
    echo "<script>alert('Error al registrar. Intenta nuevamente.'); window.location='../vistas/registro.php';</script>";
}
?>
