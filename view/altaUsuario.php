<?php 
    require_once("menu.php");
    
    if (!isset($_SESSION)) {
		session_start();
	}
    
    $sesion_activa = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/signin.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/e547f827f8.js" crossorigin="anonymous"></script>
</head>

<body class="bg-grad">
    <?php        
        if ($sesion_activa) {
        ?>
            <header>
                <?= menu_bs('a'); ?>
            </header>
        <?php
        }
    ?>
    <div class="container <?php if ($sesion_activa) { echo 'mt-4'; } ?>">
        <form class="form-user from-max-width shadow bg-light rounded-3" action="../controller/checkUsuario.php" method="post" class="needs-validation">
            <div class=" text-center">
                <img src="../images/logo.jpg" alt="Logo CABA" width="72" height="72" class="d-flex mx-auto mb-4">
                <h2>Alta de Usuario</h2>
                <p class="lead">Página que nos permite dar de alta un usuario para luego login</p>
            </div>

            <div class="row">
                <div class="col-12 mb-2 field">
                    <!-- <label for="usuario" class="form-label">Usuario</label> -->
                    <i class="icon fas fa-envelope"></i>
                    <input type="email" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <div class="invalid-feedback">
                        El email debe contener un @
                    </div>
                </div>
                <div class="col-12 mb-2 field">
                    <i class="icon fas fa-user"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre y apellido" required>
                    <div class="invalid-feedback">
                        El nombre debe contener un alfabético
                    </div>
                </div>
                <div class="col-12 mb-2 field">
                    <i class="icon fas fa-lock"></i>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese una contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    <div class="invalid-feedback">
                        La contraseña debe tener más de 8 dígitos, contener letras minúsuculas y mayúsculas y algún dígito
                    </div>
                </div>
                <div class="col-12 mb-2 field">
                    <i class="icon fas fa-key"></i>
                    <input type="password" class="form-control" id="passwordc" name="passwordc" placeholder="Confirme la contraseña ingresada" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    <div class="invalid-feedback">
                        La contraseña debe tener más de 8 dígitos, contener letras minúsuculas y mayúsculas y algún dígito
                    </div>
                </div>
            </div>

            <hr class="mb-4">

            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary btn-lg w-100" type="submit">Enviar <i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </form>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/functions.js"></script>
</body>

</html>