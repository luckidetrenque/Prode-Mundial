<?php
if (isset($_POST["login-admin"])) {
	require_once "../Classes/functions.php";
	require_once "users.php";

	// Limpio los campos recibidos
	$username = cleanFields($_POST["username"]);
	$password = cleanFields($_POST["password"]);
	$urlback = $_POST["urlback"];

	if ($users[$username] == $password) {
		session_start();
		// Creamos una nueva id de sesión y eliminamos la anterior (true)
		session_regenerate_id(true);
		$_SESSION["autentificado"] = "SI";
		$_SESSION["username"] = $username;
		$_SESSION["S_idAnunciante"] = $password;
		header ("Location:$urlback");
	} else {
		echo'<script>alert("Usuario incorrecto y/o contraseña incorrecta, por favor ingrese los datos correctamente. Gracias"); history.back(1);</script>';
		die();
	}
}
?> 