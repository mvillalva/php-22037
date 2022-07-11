<?php 
class UsuarioDAO {

    public function validarUsuYPass($usu, $pass) {
        require("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB();
        $conexionDB->conectar();

        $sql ="SELECT * FROM usuarios WHERE usuario = '$usu' AND clave='$pass'";
        $conexionDB->ejecutar($sql);

        $existeUsuYPass = $conexionDB->cantFilas() > 0;
        if ($existeUsuYPass) {
            return true;
        } else {
            return false;
        }
        
    }

    public function guardarUsuario($usuario, $password, $nombre) {
        require("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB();
        $conexionDB->conectar();

        $sql="INSERT INTO usuarios(usuario, clave, nombreyapellido) VALUES ('$usuario','$password','$nombre')";

        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function listarUsuarios() {
        require("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB();
        $conexionDB->conectar();

        $sql="SELECT * FROM usuarios";
        $result = $conexionDB->ejecutar($sql);

        while ($usu = $result->fetch_assoc()) {
            $listaUsu[] = $usu;
        }

        return $listaUsu;    
    }

}

?>