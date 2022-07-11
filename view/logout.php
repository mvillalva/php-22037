<?php
    require('../controller/checkSession.php');
    require('../controller/sessionLogout.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="https://kit.fontawesome.com/e547f827f8.js" crossorigin="anonymous"></script>
    <title>PHP</title>
</head>

<body class="bg-grad">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="container text-center bg-light rounded-3 shadow w-75 w-lg-50">
            <div class="py-4 text-center">
                <img class="d-block mx-auto mb-4" src="../images/logo.jpg" alt="Logo caba" width="72" height="72">
                <h1>Gracias por su visita!</h1>
                <div class="mt-5">
                    <a class="btn btn-warning btn-lg" href="../index.php">Ingresar <i class="fas fa-sign-in-alt"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>