<?php 
class LocalidadDAO {
      
    public function listarLocalidades() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Localidad.php");

        $con = new ConexionDB();
        $con->conectar();
        $result = $con->ejecutar("SELECT * FROM localidades");

        while ($localidad = $result->fetch_assoc()) {
            //todo: cargar todos los datos del pedido
            $locObj = new Localidad(  $localidad["idlocalidad"]  , 
                                      $localidad["nombre"]       ,
                                      $localidad["idprovincia"]
                                    );

            $listLocalidades[] = $locObj;
        }

        return $listLocalidades;

    }
}

?>