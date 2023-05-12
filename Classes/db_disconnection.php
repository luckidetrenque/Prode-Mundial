<?php
// Libero los resultados de la sentencia SQL
//mysqli_free_result($result);

// Limpio el cache interno
//$sql = "FLUSH PRIVILEGES";
//mysqli_query($conexion,$sql) OR die("ERROR");

// Desconexion con el servidor y la base de datos
mysqli_close($conexion);
?>