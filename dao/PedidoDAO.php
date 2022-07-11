<?php 
class PedidoDAO {

    public function guardarPedido($pedido) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB();
        $conexionDB->conectar();
    
        $sql = "INSERT INTO pedidos 
        (`nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `provincia`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarentrega()}', 
         {$pedido->getLocalidad()},
         {$pedido->getProvincia()}, 
         '{$pedido->getCodpostal()}', 
         '{$pedido->getFormadepago()}', 
         '{$pedido->getTarjtitular()}', 
         {$pedido->getTarjnumero()}, 
         '{$pedido->getTarjvto()}', 
         {$pedido->getTarjclave()})";
        
        
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }
        
    public function listarPedidos() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Pedido.php");

        $con = new ConexionDB();
        $con->conectar();
        $result = $con->ejecutar("SELECT * FROM pedidos");

        while ($pedido = $result->fetch_assoc()) {
            //todo: cargar todos los datos del pedido
            $pedObj = new Pedido(   $pedido["idpedido"]     , 
                                    $pedido["nombre"]       ,
                                    $pedido["apellido"]     ,
                                    $pedido["usuario"]      ,
                                    $pedido["mail"]         ,
                                    $pedido["lugarentrega"] ,
                                    $pedido["localidad"]    ,
                                    $pedido["provincia"]    ,
                                    $pedido["codpostal"]    , 
                                    "","","","","");

            $listPedidos[] = $pedObj;
        }

        return $listPedidos;

    }
}

?>