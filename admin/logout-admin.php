<?php
//session_cache_limiter('public');
// Retomamos la sesion
session_start();

// Creamos una nueva id de sesi�n y eliminamos la anterior (true)
session_regenerate_id(true);

// Eliminamos todas las variables de sesion y sus valores
$_SESSION = array();

// Verificamos si existe la cookie del usuario que identificaba a esa sesion y  la eliminamos
if (ini_get("session.use_cookies")==true) {
	$parametros = session_get_cookie_params();
	setcookie(session_name(), '', time()-99999,
	$parametros["path"], $parametros["domain"],
	$parametros["secure"], $parametros["httponly"]);
}

// Eliminamos el archivo de sesion del servidor
session_destroy();

// Redireccionamos a la pagina de login
header ("Location:/");
?>