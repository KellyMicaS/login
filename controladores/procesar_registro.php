<?php
//Llamamos al modelo de usuarios para obtener toda la información
require_once "../modelos/Usuario.php";

//Obtenemos los datos del formulario por método POST, limpiamos espacios vacios con un trim
$nombre     = trim($_POST['nombre']);
$apellido   = trim($_POST['apellido']);
$usuario    = trim($_POST['usuario']);
$correo     = trim($_POST['correo']);
$contrasena = $_POST['contrasena'];
$rol        = 'usuario'; //Usuario es rol (valor) que le asignamos por defecto a todos los que se registran

//Creamos un objeto programable para aplicar los métodos
$usuarioModel = new Usuario();

//Verificamos si ya existe el usuario o correo
if ($usuarioModel->existeUsuarioOCorreo($usuario, $correo)) {
    //Si el usuario ya existe, sale una ventana que le informa al usuario
    echo "<script>alert('El usuario o correo ya está registrado.'); window.location='../vistas/registro.php';</script>";
    exit;
}

//cSi no existe, procedemos a hashear la contraseña
$hash = password_hash($contrasena, PASSWORD_DEFAULT);

//Registro del usuario
if ($usuarioModel->registrarUsuario($nombre, $apellido, $usuario, $correo, $hash, $rol)) {
    //Si el usuario se registró correctamente, damos aviso de que ahora puede iniciar sesión
    echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión :)'); window.location='../vistas/login.php';</script>";
} else {
    //Si no se pudo registrar correctamente, damos aviso de que lo intente nuevamente
    echo "<script>alert('Error al registrar. Intenta nuevamente.'); window.location='../vistas/registro.php';</script>";
}
?>
