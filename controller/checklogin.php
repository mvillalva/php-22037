<?php 
    if (!isset($_SESSION)) {
		session_start();
	}

    $usu=$_POST["inputEmail"];
    $pass=$_POST["inputPassword"];

    require_once("../dao/UsuarioDAOC.php");

    $usuarioDAO = new UsuarioDAOC();
    $loginValido = $usuarioDAO->validarUsuYPass($usu, $pass);

    if ($loginValido) {
        $_SESSION['user'] = $usu;
        header("Location: ../view/inicio.php");
        exit;
    } else {
        header("Location: ../view/loginError.php");
        exit;
    }
?>