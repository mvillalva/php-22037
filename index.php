<?php
    if (!isset($_SESSION)) {
		session_start();
	}
    
    // Si esta definida la variable de session 'user' y tengo datos en dicha variable, redirecciono a inicio.php
    if (isset($_SESSION['user']) && $_SESSION['user']) {
        header("Location: ./view/inicio.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
    <link href="./css/signin.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e547f827f8.js" crossorigin="anonymous"></script>
</head>

<body class="text-center bg-grad">
    <div class="container">
        <form class="form-signin bg-light rounded-3 shadow" action="./controller/checklogin.php" method="POST">
            <img class="mb-4" src="./images/logo.jpg" width="72" height="72" />
            <h1 class="h3 mb-3">Ingresar al sistema</h1>
            <div class="field">
                <i class="icon fas fa-user"></i>
                <input type="email" name="inputEmail" class="form-control" placeholder="Ingrese su usuario" required autofocus />
            </div>
            <div class="field">
                <i class="icon fas fa-key"></i>
                <input type="password" name="inputPassword" class="form-control" placeholder="Ingrese su clave" required />
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block w-100 mb-3">Ingresar <i class="fas fa-sign-in-alt"></i></button>
            <div> 
                <a class="link" href="view/altaUsuario.php">Registrate</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>