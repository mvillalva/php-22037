<?php
require_once('../controller/checkSession.php');
require_once("menu.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include_once('header.php'); ?>
    <link rel="stylesheet" href="../css/estilo.css">
  </head>
  <body>
    <?= menu_bs(''); ?>  
    <!-- Optional JavaScript -->
    <?php include_once('footer.php'); ?>
  </body>
</html>