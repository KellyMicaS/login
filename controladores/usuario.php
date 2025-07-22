<?php
require_once "../modelos/Usuario.php";
$usuario = new Usuario();

$idusuario = isset($_POST["idusuario"]) ? limpiarCadena($_POST["idusuario"]) : "";
$nombre    = isset($_POST["nombre"])    ? limpiarCadena($_POST["nombre"]) : "";
$apellido  = isset($_POST["apellido"])  ? limpiarCadena($_POST["apellido"]) : "";
$login     = isset($_POST["usuario"])   ? limpiarCadena($_POST["usuario"]) : "";
$correo    = isset($_POST["correo"])    ? limpiarCadena($_POST["correo"]) : "";
$password  = isset($_POST["clave"])     ? limpiarCadena($_POST["clave"]) : "";
$rol       = isset($_POST["rol"])       ? limpiarCadena($_POST["rol"]) : "";

session_start();
switch ($_GET["op"]) {
    case 'guardaryeditar':
        if (empty($idusuario)) {
            $rspta = $usuario->insertar($nombre, $apellido, $login, $correo, $password, $rol);
            echo $rspta ? "Usuario registrado con éxito." : "Error al registrar usuario.";
        } else {
            $rspta = $usuario->editar($idusuario, $nombre, $apellido, $login, $correo, $password, $rol);
            echo $rspta ? "Usuario actualizado." : "Error al actualizar usuario.";
        }
        break;

    case 'mostrar':
        $rspta = $usuario->mostrar($idusuario);
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta = $usuario->listar();
        $data = [];
        while ($reg = $rspta->fetch_object()) {
            $data[] = [
                "0" => '<button class="btn btn-warning" onclick="mostrar('.$reg->idusuario.')">
                          <i class="fa fa-pencil"></i></button>',
                "1" => $reg->login,
                "2" => $reg->nombre . " " . $reg->apellido,
                "3" => $reg->correo,
                "4" => $reg->rol
            ];
        }
        echo json_encode([
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        ]);
        break;

    case 'cambiarRol':
        $rspta = $usuario->cambiarRol($idusuario, $rol);
        echo $rspta ? "Rol actualizado." : "Error al cambiar rol.";
        break;

    case 'verificarRol':
        echo json_encode(["rol" => $_SESSION["rol"] ?? ""]);
        break;
}
?>
