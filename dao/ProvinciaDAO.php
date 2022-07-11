<?php 
class ProvinciaDAO {
      
    public function listarProvincias() {
        require("../dataBase/ConexionDB.php");
        require("../model/Provincia.php");

        $con = new ConexionDB();
        $con->conectar();
        $result = $con->ejecutar("SELECT * FROM provincias");

        while ($provincia = $result->fetch_assoc()) {            
            $provObj = new Provincia(  $provincia["idprovincia"]  , 
                                      $provincia["nombre"]
                                    );

            $listProvincias[] = $provObj;
        }

        return $listProvincias;
    }
}

?>