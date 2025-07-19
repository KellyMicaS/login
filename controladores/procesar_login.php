<?php
session_start();
require_once "../modelos/Usuario.php";

// Sanitizar entradas (nombres de campos correctos)
$usuario = trim($_POST['login']);
$contrasena = $_POST['password'];

$usuarioModel = new Usuario();

// Buscar por login o correo
$datos = $usuarioModel->obtenerUsuarioPorLoginOCorreo($usuario);

if ($datos) {
    // Verificar contraseña hasheada
    if (password_verify($contrasena, $datos['password'])) {
        // Autenticación correcta: crear sesión
        $_SESSION['idusuario'] = $datos['idusuario'];
        $_SESSION['nombre']    = $datos['nombre'];
        $_SESSION['apellido']  = $datos['apellido'];
        $_SESSION['login']     = $datos['login'];
        $_SESSION['rol']       = $datos['rol'];
        echo "<script>alert('Bienvenido al sistema!:)'); window.location='../index.php';</script>";
        exit;
    } else {
        // Contraseña incorrecta
        echo "<script>alert('Contraseña incorrecta'); window.location='../vistas/login.php';</script>";
    }
} else {
    // Usuario no encontrado
    echo "<script>alert('Usuario o correo no registrado'); window.location='../vistas/login.php';</script>";
}
?>
