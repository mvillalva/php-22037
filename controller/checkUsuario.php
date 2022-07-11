<?php 
    $usuario  = isset($_POST["usuario"])?$_POST["usuario"]:'';
    $password = isset($_POST["password"])?$_POST["password"]:'';
    $nombre   = isset($_POST["nombre"])?$_POST["nombre"]:'';

    require("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();
    $guardoOk = $usuarioDAO->guardarUsuario($usuario, $password, $nombre);

    if ($guardoOk) {
        header("Location: ../view/mensajeOk.php");
        exit;    
    } else {
        header("Location: ../view/mensajeError.php");
        exit;    
    }
?>