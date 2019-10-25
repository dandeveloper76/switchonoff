<?php
define( 'BASE_PATH', 'http://172.18.2.166:8080/out/');//Ruta base donde se encuentra
define( 'DB_HOST', 'localhost' );//Servidor de la base de datos
define( 'DB_USERNAME', 'root');//Usuario de la base de datos
define( 'DB_PASSWORD', 'tucontraseña');//Contraseña de la base de datos
define( 'DB_NAME', 'tutablabasededatos');//Nombre de la base de datos

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
