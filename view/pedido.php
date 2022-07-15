<?php
    require_once('../controller/checkSession.php');
    require_once('templates/menu.php');
    require_once('../dao/UsuarioDAO.php');

    $usuarioDAO = new UsuarioDAO();
    $usuarioObj = $usuarioDAO->getUsuarioNombre($_SESSION['user']);
    
    $usuario = '';
    $nombre= '';

    if (!empty($usuarioObj)) {
        $usuario = $usuarioObj->getUsuario();
        $nombre = $usuarioObj->getNombreYApellido();
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PHP - Registro de Pedido</title>

    <!-- Bootstrap core CSS -->
    <?php include('templates/head.php') ?>
    <link rel="stylesheet" href="../css/estilo.css" />
</head>

<body class="bg-grad">
    <header>
        <?= menu_bs(); ?>
    </header>
    <div class="d-flex justify-content-center align-items-center my-7">
        <div class="container bg-light rounded-3 shadow">
            <div class="py-4 text-center">
                <img class="d-block mx-auto mb-4" src="../images/logo.jpg" alt="Logo caba" width="72" height="72" />
                <h2>Formulario de Pedido</h2>
                <p class="lead">La fecha de entrega será coordinada telefónicamente.</p>
            </div>

            <div class="container">
                <h4 class="mb-3">Tu pedido</h4>
                <?php include('templates/pedido-form.php'); ?>
            </div>            
        </div>
    </div>

    <?php include('templates/footer.php'); ?>
    <?php include('templates/scripts.php') ?>
    <script src="../js/form-validation.js"></script>    
</body>

</html>