<?php
require_once "../config/Conexion.php";

class Usuario {

    // Registrar nuevo usuario
    public function registrarUsuario($nombre, $apellido, $login, $correo, $password, $rol = 'usuario') {
    $sql = "INSERT INTO usuario (nombre, apellido, login, correo, password, rol)
            VALUES ('$nombre', '$apellido', '$login', '$correo', '$password', '$rol')";
    return ejecutarConsulta($sql);
    }   

    // Verifica si ya existe un usuario o correo registrado
    public function existeUsuarioOCorreo($login, $correo) {
        $sql = "SELECT idusuario FROM usuario WHERE login = '$login' OR correo = '$correo' LIMIT 1";
        $resultado = ejecutarConsultaSimpleFila($sql);
        return $resultado != null;
    }

    // Obtener usuario por login o correo (para login)
    public function obtenerUsuarioPorLoginOCorreo($usuario) {
        $sql = "SELECT * FROM usuario 
                WHERE login = '$usuario' OR correo = '$usuario' LIMIT 1";
        return ejecutarConsultaSimpleFila($sql);
    }
}
?>
