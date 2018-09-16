<?php
/*
Plantilla principal con Bootstrap 4
Incluirá componentes y contenido que se encuentra dentro del directorio vistas/modulos
*/
?>
<!DOCTYPE HTML>
<html lang="es-MX">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <title>PHP MVC</title>
  </head>
  <body>
    <?php
      /* Aquí se cargarán contenidos o componentes según el valor de $_GET['pagina'] (previamente validadas por el controlador y modelo) */
      $enlace = new ControladorPagina();
      $enlace -> enlaceControlador();
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
