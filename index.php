<?php
/*
David Rodarte Hernández
PHP-MVC: Framework sencillo y ligero para PHP 7+

Archivo index.php: Es el primero en cargar al acceder, únicamente
se usará para requerir modelos y controladores y además crear la instancia
para la carga de la página desde vistas.

Modelos: Incluye la parte lógica de la aplicación, como por ejemplo la conexión a base de datos,
consultas, ...
Vistas: Es la parte visible para el cliente, dentro está el directorio de módulos a incluir
Controladores: Sirven para dar funcionalidad a las vistas y comunicarlas con los modelos para lograr un buen encapsulamiento
*/
require_once 'controladores/controladorPagina.php';
require_once 'modelos/modeloPagina.php';
/* Se llama a su función cargar() para incluir la página principal*/
ControladorPagina::cargar();
