<?php
    require_once("menu.php");

    if (!isset($_SESSION)) {
		session_start();
	}
    
    $sesion_activa = isset($_SESSION['user']);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/estilo.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e547f827f8.js" crossorigin="anonymous"></script>
</head>

<body class="bg-grad">
    <?php        
        if ($sesion_activa) {
        ?>
            <header>
                <?= menu_bs('x'); ?>
            </header>
        <?php
        }
    ?>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="container text-center bg-light rounded-3 shadow w-75 w-lg-50">
            <div class="py-4 text-center">
                <img src="../images/logo.jpg" alt="Logo CABA" width="72" height="72" class="d-flex mx-auto mb-4">
                <h2 class="text-danger mb-5">La operación se realizó correctamente</h2>
                <a class="btn btn-outline-primary btn-lg" href="inicio.php">Inicio</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>