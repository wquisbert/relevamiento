<?php
require_once 'messages.php';

define( 'BASE_PATH', 'http://localhost/baulphp/login/');//Ruta base donde se encuentra
define( 'DB_HOST', 'localhost' );//Servidor de la base de datos
define( 'DB_USERNAME', 'root');//Usuario de la base de datos
define( 'DB_PASSWORD', '6156472');//Contraseña de la base de datos
define( 'DB_NAME', 'relevamiento');//Nombre de la base de datos

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
