<?php
// Parametros de conexion con el servidor MySQL
// Server mysql (OBLIGATORIO)
// User mysql (OBLIGATORIO)
// Password mysql (OPCIONAL)
// Base de datos mysql (OBLIGATORIO)

// Ambiente de Producción (HOSTING)
define("DB_SERVER", "");
define("DB_USER", "");
define("DB_PASS", "");
define("DB_NAME", "");

// Ambiente de Desarrollo (LOCALHOST)
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","upj");

// Constante con nuestro path absoluto
define("PATH","http://".$_SERVER['HTTP_HOST']."/");

// Conexion el servidor MySQL y seleccione la base de datos
$conexion = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Verificar la conexion
if ($conexion->connect_errno) {
  echo "No se puede conectar con la base de datos, vuelva a intentar mas tarde. Gracias: $conexion->connect_error";
  die();
}
else {
  $conexion->set_charset("utf8mb4");
}