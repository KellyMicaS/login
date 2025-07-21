<?php

//La sesión del usuario inicia
session_start();

//Llamamos al modelo del usuario
require_once "../modelos/Usuario.php";

//Obtenemos la información del formulario por el método POST
//Trim se encarga de limpiar los espacios vacios del formulario
$usuario = trim($_POST['login']);
$contrasena = $_POST['password'];

//Creamos un objeto programable
$usuarioModel = new Usuario();

// Llamamos al método para buscar por login o correo que está almacenado en la BDD
$datos = $usuarioModel->obtenerUsuarioPorLoginOCorreo($usuario);

//Si el usuario existe:
if ($datos) {
    //Verificamos si la contraseña hasheada existe
    if (password_verify($contrasena, $datos['password'])) {
        //Almacenamos los datos del usuario en una sesión para poder utilizarlos luego
        //Por ejemplo para mostrar el nombre del usuario en pantalla
        $_SESSION['idusuario'] = $datos['idusuario'];
        $_SESSION['nombre']    = $datos['nombre'];
        $_SESSION['apellido']  = $datos['apellido'];
        $_SESSION['login']     = $datos['login'];
        $_SESSION['rol']       = $datos['rol'];
        //Se muestra una alerta en ventana que le da la bienvenida al usuario
        echo "<script>alert('Bienvenido al sistema!:)'); window.location='../index.php';</script>";
        exit;
    } else {
        //Si la contraseña es incorrecta, salta una alerta en ventana que dice "contraseña incorrecta"
        echo "<script>alert('Contraseña incorrecta'); window.location='../vistas/login.php';</script>";
    }
} else {
    // Si el usuario no es encontrado en la BDD, salta una ventana indicando que no existe
    echo "<script>alert('Usuario o correo no registrado'); window.location='../vistas/login.php';</script>";
}
?>
