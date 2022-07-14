<?php
require_once('../controller/checkSession.php');
require_once("templates/menu.php");
?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP - Listado de Pedidos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include('templates/header.php'); ?>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body class="bg-grad">
    <header>
        <?= menu_bs(); ?>
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
                            <th scope="col">Nombre y Apellido</th>                            
                            <th scope="col">e-mail</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Código Postal</th>
                            <th scope="col">Acción</th>
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
                            $html .= "<td>" . $pedido->getUsuario()->getNombreYApellido() . "</td>";                            
                            $html .= "<td>" . $pedido->getMail()          . "</td>";
                            $html .= "<td>" . $pedido->getLugarEntrega()  . "</td>";
                            $html .= "<td>" . $pedido->getLocalidad()->getNombre() . "</td>";
                            $html .= "<td>" . $pedido->getLocalidad()->getProvincia()->getNombre() . "</td>";
                            $html .= "<td>" . $pedido->getCodPostal()     . "</td>";
                            $html .= "<td>";
                            $html .= "  <button class='btn btn-sm btn-warning text-white' name='btnEditar' title='Modificar' data-id='".$pedido->getIdPedido()."' data-bs-toggle='modal' data-bs-target='#pedido'><i class='fas fa-pencil-alt'></i></button>";
                            $html .= "  <button class='btn btn-sm btn-danger' name='btnBorrar' title='Borrar' data-id='".$pedido->getIdPedido()."' data-bs-toggle='modal' data-bs-target='#confirma'><i class='fas fa-trash-alt'></i></button>";
                            $html .= "</td>";
                            $html .= "</tr>";
                            echo $html;
                        }
                        ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="mensajeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modal-header" class="modal-header bg-warning">
                    <h5 id="modal-title" class="modal-title" id="mensajeLabel">Atención!</h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="texto-confirma"></p>
                </div>
                <div class="modal-footer">
                    <button id="btnNo" type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                    <button id="btnSi" type="button" data-bs-dismiss="modal" class="btn btn-success">Sí</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mensaje" tabindex="-1" aria-labelledby="mensajeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="mensaje-header" class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="mensajeLabel">Información!</h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="texto-mensaje"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="pedido" tabindex="-1" aria-labelledby="mensajeLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div id="modal-header" class="modal-header bg-primary">
                    <h5 id="modal-title" class="modal-title text-white" id="mensajeLabel">Edición</h5>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include('templates/pedido-form.php'); ?>
                </div>                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <?php include('templates/footer.php'); ?>
    <script src="../js/pedido.js"></script>
</body>

</html>