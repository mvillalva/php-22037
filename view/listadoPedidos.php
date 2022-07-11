<?php
require_once('../controller/checkSession.php');
require_once("menu.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP - Listado de Pedidos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include_once('header.php'); ?>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="bg-grad">
    <header>
        <?= menu_bs('p'); ?>
    </header>

    <div class="d-flex justify-content-center align-items-center my-7">
        <div class="container text-center bg-light rounded-3 shadow">
            <div class="py-4 text-center">
                <img class="d-block mx-auto mb-4" src="../images/logo.jpg" alt="Logo caba" width="72" height="72">
                <h1>Pedidos</h1>
                <p class="lead">Listado de Pedidos pendientes</p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-sm bg-light">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">e-mail</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Código Postal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../dao/PedidoDAO.php");
                        $pedidoDAO = new PedidoDAO();
                        $listaPedidos = $pedidoDAO->listarPedidos();

                        foreach ($listaPedidos as $pedido) {
                            $html = "<tr>";
                            $html .= "<td>" . $pedido->getIdPedido()      . "</td>";
                            $html .= "<td>" . $pedido->getApellido()      . "</td>";
                            $html .= "<td>" . $pedido->getNombre()        . "</td>";
                            $html .= "<td>" . $pedido->getMail()          . "</td>";
                            $html .= "<td>" . $pedido->getLugarEntrega()  . "</td>";
                            $html .= "<td>" . $pedido->getLocalidad()     . "</td>";
                            $html .= "<td>" . $pedido->getProvincia()     . "</td>";
                            $html .= "<td>" . $pedido->getCodPostal()     . "</td>";
                            $html .= "</tr>";
                            echo $html;
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <?php include_once('footer.php'); ?>
</body>

</html>