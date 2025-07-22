<?php
require_once "../config/Conexion.php";

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
    public function __construct(){}

    public function insertar($nombre, $apellido, $login, $correo, $password, $rol){
        $sql = "INSERT INTO usuario (nombre, apellido, login, correo, password, rol)
                VALUES ('$nombre','$apellido','$login','$correo','$password','$rol')";
        return ejecutarConsulta($sql);
    }

    public function editar($idusuario, $nombre, $apellido, $login, $correo, $password, $rol){
        $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido',
                login='$login', correo='$correo', password='$password', rol='$rol'
                WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idusuario){
        $sql = "SELECT * FROM usuario WHERE idusuario='$idusuario'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar(){
        $sql = "SELECT * FROM usuario";
        return ejecutarConsulta($sql);
    }

    public function cambiarRol($idusuario, $rol){
        $sql = "UPDATE usuario SET rol='$rol' WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);
    }
}
?>
