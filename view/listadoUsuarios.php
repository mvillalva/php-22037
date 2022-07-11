<?php
require('../controller/checkSession.php');
require_once("menu.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP - Listado de Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="https://kit.fontawesome.com/e547f827f8.js" crossorigin="anonymous"></script>
</head>

<body class="bg-grad">
    <header>
        <?= menu_bs('u'); ?>
    </header>

    <div class="d-flex justify-content-center align-items-center my-7">
        <div class="container text-center bg-light rounded-3 shadow">
            <div class="py-4 text-center">
                <img class="d-block mx-auto mb-4" src="../images/logo.jpg" alt="Logo caba" width="72" height="72">
                <h2>Usuarios</h2>
                <p class="lead">Listado de Usuarios</p>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-sm bg-light">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../dao/UsuarioDAOC.php");
                        $dao = new UsuarioDAOC();
                        $listaUsu = $dao->listarUsuarios();
                        //var_dump($listaUsu);

                        for ($i = 0; $i < count($listaUsu); $i++) {
                        ?>
                            <tr>
                                <td><?php echo $listaUsu[$i]["idusuario"] ?></td>
                                <td><?php echo $listaUsu[$i]["usuario"] ?></td>
                                <td><?php echo $listaUsu[$i]["clave"] ?></td>
                            </tr>

                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/functions.js"></script>
</body>

</html>