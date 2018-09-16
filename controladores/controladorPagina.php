<?php
/*Controlador para incluir la página desde vistas/pagina.php
-Función cargar(): Incluye la página principal desde vistas
-Función enlaceControlador(): Recibe el valor de $_GET['pagina'], lo envía para su validación en el modelo y de ser válido, incluye el contenido
*/
class ControladorPagina{

  public function cargar(){
    include 'vistas/pagina.php';
  }

  public function enlaceControlador(){
    #Si la variable $_GET['pagina'] está definida, entonces $enlace toma su valor, si no, tomará el valor por defecto
    if( isset($_GET['pagina']) ) {
      $enlace=$_GET['pagina'];
    }else {
      $enlace='inicio';
    }
    #Se envía la variable a su validación en el modelo para después incluirse dentro del body de vistas/pagina.php
    $respuesta=ModeloPagina::validarEnlace($enlace);
    include $respuesta;
  }
}
