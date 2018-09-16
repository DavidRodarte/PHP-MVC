<?php
/*
Se usa para validar los enlaces y devolver la página que se cargará después de recibir
el valor de $_GET['pagina'] desde el controlador

La función validarEnlace() recibe el valor de la variable $_GET['pagina'] desde el controlador para luego
ser comparado con un array de opciones válidas, después se devuelve la respuesta para ser incluida en la vista utilizando
la función enlace() del controlador
*/
class ModeloPagina{
  public function validarEnlace($enlace){
    #Los nombres de los valores válidos deberán de ser los mismos que se encuentren dentro de la carpeta de módulos
    $validos = array(
                      "inicio",
                      "otra"
                    );
    #Módulo tomará el valor del enlace si su valor se encuentra en el array de $validos
    if( in_array($enlace, $validos) ) {
      $modulo = 'vistas/modulos/'.$enlace.'.php';
    }else {
      #Valor por defecto
      $modulo = 'vistas/modulos/inicio.php';
    }
    #Se devuelve $modulo con la ruta del módulo a incluir
    return $modulo;
  }

}
