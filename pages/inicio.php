<?php

session_start();
//if (!isset($_SESSION['nombre'])){

    //$usuario=$_SESSION['nombre'];
//header("Location: index.php");
//}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Universidad de las Ciencias Empresariales </title>

  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">

  <!-- Hoja de Estilos Css -->
  <link href="../css/signin.css" rel="stylesheet">



  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
</head>

<?php include "pages/menu.php"; ?>

<main>

  <?php
  if (isset($_GET["ruta"])) {

    if ($_GET["ruta"] == "oferta-academica" ||
      $_GET["ruta"] == "eventos" ||
      $_GET["ruta"] == "blog" ||
      $_GET["ruta"] == "biblioteca" ||
      $_GET["ruta"] == "recursos" ||
      $_GET["ruta"] == "convalidaciones" ||
      $_GET["ruta"] == "biblioteca" ||
      $_GET["ruta"] == "recursos" ||
      $_GET["ruta"] == "salir" ||
    
      $_GET["ruta"] == "salir"
    ) {

      include "pages/" . $_GET["ruta"] . ".php";
    }else {

      header('Location: ../ProyectoUcem/pages/404.php');
     }

    if ($_GET["ruta"] == "inicio") {

      header('Location: ../ProyectoUcem/');

    } if ($_GET["ruta"] == "login") {

      header('Location: ../ProyectoUcem/pages/login.php');

    }if ($_GET["ruta"] == "frmCrearCuenta") {

      header('Location: ../ProyectoUcem/pages/frmCrearCuenta.php');

    }  
  } else {

    include "pages/contenido.php";
  }
  ?>

</main>


<script src="assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>