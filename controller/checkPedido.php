<?php 
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $usuario = $_POST['username'];
    $mail = $_POST['email'];
    $lugarentrega = $_POST['address'];
    $localidad = $_POST['country'];
    $provincia = $_POST['state'];
    $codpostal = $_POST['zip'];
    $formadepago = $_POST['paymentMethod'];
    $tarjtitular = $_POST['cc-name'];
    $tarjnumero = $_POST['cc-number'];
    $tarjvto = $_POST['cc-expiration'];
    $tarjclave = $_POST['cc-cvv'];

    //Este paso es necesario porque trabajamos con POO
    //Creamos un objeto Pedido para luego guardarlo en la DB
    require("../model/Pedido.php");
    $pedido = new Pedido($nombre, $apellido, $usuario, $mail, $lugarentrega, $localidad, $provincia, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave);
    
    require("../dao/PedidoDAO.php");

    $pedidoDAO = new PedidoDAO();
    $guardoOk = $pedidoDAO->guardarPedido($pedido);

    if ($guardoOk) {
        header("Location: ../view/mensajeOk.php");
        exit;    
    } else {
        header("Location: ../view/mensajeError.php");
        exit;    
    }  
?>