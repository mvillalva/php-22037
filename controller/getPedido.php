<?php  
  $_POST = json_decode(file_get_contents('php://input'),true);
  $idPedido = isset($_POST['idPedido'])?$_POST['idPedido']:null;
  $salida = array();

  if($idPedido) {
    require_once('../dao/PedidoDAO.php');
    
    $pedDAO = new PedidoDAO();
    $pedido = $pedDAO->getPedido($idPedido);
    
    $obj = array();
    $obj["idpedido"]      = $pedido->getIdPedido();
    $obj['idusuario']     = $pedido->getUsuario()->getIdUsuario();
    $obj['usuario']       = $pedido->getUsuario()->getUsuario();
    $obj['nombre']        = $pedido->getUsuario()->getNombreYApellido();
    $obj["mail"]          = $pedido->getMail();
    $obj["lugarentrega"]  = $pedido->getLugarEntrega();
    $obj["provincia"]     = $pedido->getLocalidad()->getProvincia()->getIdProvincia();
    $obj["localidad"]     = $pedido->getLocalidad()->getIdLocalidad();
    $obj["codpostal"]     = $pedido->getCodPostal();
    $obj["formadepago"]   = $pedido->getFormaDePago();
    $obj["tarjtitular"]   = $pedido->getTarjTitular();
    $obj["tarjnumero"]    = $pedido->getTarjNumero();
    $obj["tarjvto"]       = $pedido->getTarjVto();
    $obj["tarjclave"]     = $pedido->getTarjClave();

    $salida['status'] = 0;
    $salida['data'] = $obj;
  } else {
    $salida['status'] = 1;
    $salida['data'] = '';
  }
  
  echo json_encode($salida);

?>