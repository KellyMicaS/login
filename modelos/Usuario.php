<?php
//Llamamos a la conexión con la BDD para poder acceder
require_once "../config/Conexion.php";

//Definimos una clase para poder aplicar todos los métodos en el usuario
class Usuario {

    //Registramos un nuevo usuario
    public function registrarUsuario($nombre, $apellido, $login, $correo, $password, $rol = 'usuario') {
    $sql = "INSERT INTO usuario (nombre, apellido, login, correo, password, rol)
            VALUES ('$nombre', '$apellido', '$login', '$correo', '$password', '$rol')";
    return ejecutarConsulta($sql);
    }   

    //Verificamos si ya existe un usuario o correo registrado, resuelve true si existe o false si no.
    public function existeUsuarioOCorreo($login, $correo) {
        //Aquí comprobamos que el correo debe ser único, no se peude duplicar
        $sql = "SELECT idusuario FROM usuario WHERE login = '$login' OR correo = '$correo' LIMIT 1";
        $resultado = ejecutarConsultaSimpleFila($sql);
        return $resultado != null;
    }

    //Buscamos a un usuario por login o correo (para loguearse)
    public function obtenerUsuarioPorLoginOCorreo($usuario) {
        $sql = "SELECT * FROM usuario 
                WHERE login = '$usuario' OR correo = '$usuario' LIMIT 1";
        return ejecutarConsultaSimpleFila($sql);
    }
}
?>
