<?php
/*Ejemplo de conexión utilizando PDO
*/
class Conexion{
  private static $servidor="";
  private static $nombreBD="";
  private static $usuario="";
  private static $contrasena="";
  # $opciones para usar utf-8
  private static $opciones=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");

  protected function conectar(){
    $con = new PDO("mysql:host=".self::$servidor.";dbname=".self::$nombreBD."", self::$usuario, self::$contrasena, self::$opciones);
    return $con;
  }

}
