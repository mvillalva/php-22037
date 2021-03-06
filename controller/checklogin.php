<?php 
    if (!isset($_SESSION)) {
		session_start();
	}

    $usu=$_POST["inputEmail"];
    $pass=$_POST["inputPassword"];

    require_once("../dao/UsuarioDAO.php");

    $usuarioDAO = new UsuarioDAO();
    $loginValido = $usuarioDAO->validarUsuYPass($usu, $pass);

    if ($loginValido) {
        $_SESSION['user'] = $usu;
        $_SESSION['name'] = $usuarioDAO->getUsuarioNombre($usu)->getNombreYApellido();
        header("Location: ../index.php");
        exit;
    } else {
        header("Location: ../view/loginError.php");
        exit;
    }
?>