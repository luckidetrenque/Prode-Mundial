<?php
// Ejecuta una consulta a la DB y devuelve un array con el resultado
function selectData($conexion,$sql) {
  $data = array();
  $result = $conexion->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }
  return $data;
}

// Inserta datos en la DB
function insertData($conexion,$sql) {
  if ($conexion->query($sql) === TRUE) {
      echo "<p class=\"success\"> Planilla ingresada correctamente.</p>";
  } else {
      echo "<p class=\"error\">Error: " . $sql . "<br>" . $conexion->error,"</p>";
  }
}

// Actualiza datos en la DB
function updateData($conexion,$sql) {
  if ($conexion->query($sql) === TRUE) {
    echo "<p class=\"success\"> Datos actualizados correctamente.</p>";
  } else {
    echo "<p class=\"error\">Error: " . $sql . "<br>" . $conexion->error,"</p>";
  }
}

// Elimina datos en la DB
function deleteData($conexion,$sql) {
  if ($conexion->query($sql) === TRUE) {
    echo "<p class=\"success\"> Datos eliminados correctamente.</p>";
  } else {
    echo "<p class=\"error\">Error: " . $sql . "<br>" . $conexion->error,"</p>";
  }
}

// Función para limpiar strings
function cleanFields($string) {
  // Elimina espacios en blanco (u otro tipo de caracteres) del inicio y el final de la cadena
  $string = trim($string);
  // Retira las etiquetas HTML y PHP de una cadena
  $string = strip_tags($string);
  // Convierte caracteres especiales en entidades HTML
  $string = htmlspecialchars($string);
  // Si están activas las magic_quotes revierte su acción mediante stripslashes
  // if(get_magic_quotes_gpc()){
  //   $string = stripslashes($string);
  // }
	return($string);
	  // Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL
		if (!is_numeric($string)){
			$string = mysqli_real_escape_string($conexion,$string);
		}
		else {
			$string = (int)$string;
		}
		return($string);
}



$matches = array(
	"match1"=>array("home"=>"qatar","visitor"=>"ecuador"),
	"match2"=>array("home"=>"senegal","visitor"=>"paises bajos"),
	"match3"=>array("home"=>"qatar","visitor"=>"senegal"),
	"match4"=>array("home"=>"paises bajos","visitor"=>"ecuador"),
	"match5"=>array("home"=>"ecuador","visitor"=>"senegal"),
	"match6"=>array("home"=>"paises bajos","visitor"=>"qatar"),
	"match7"=>array("home"=>"inglaterra","visitor"=>"iran"),
	"match8"=>array("home"=>"estados unidos","visitor"=>"gales"),
	"match9"=>array("home"=>"gales","visitor"=>"iran"),
	"match10"=>array("home"=>"inglaterra","visitor"=>"estados unidos"),
	"match11"=>array("home"=>"iran","visitor"=>"estados unidos"),
	"match12"=>array("home"=>"gales","visitor"=>"inglaterra"),
	"match13"=>array("home"=>"argentina","visitor"=>"arabia saudita"),
	"match14"=>array("home"=>"mexico","visitor"=>"polonia"),
	"match15"=>array("home"=>"polonia","visitor"=>"arabia saudita"),
	"match16"=>array("home"=>"argentina","visitor"=>"mexico"),
	"match17"=>array("home"=>"polonia","visitor"=>"argentina"),
	"match18"=>array("home"=>"arabia saudita","visitor"=>"mexico"),
	"match19"=>array("home"=>"dinamarca","visitor"=>"tunez"),
	"match20"=>array("home"=>"francia","visitor"=>"australia"),
	"match21"=>array("home"=>"tunez","visitor"=>"australia"),
	"match22"=>array("home"=>"francia","visitor"=>"dinamarca"),
	"match23"=>array("home"=>"tunez","visitor"=>"francia"),
	"match24"=>array("home"=>"australia","visitor"=>"dinamarca"),
	"match25"=>array("home"=>"alemania","visitor"=>"japon"),
	"match26"=>array("home"=>"españa","visitor"=>"costa rica"),
	"match27"=>array("home"=>"japon","visitor"=>"costa rica"),
	"match28"=>array("home"=>"españa","visitor"=>"alemania"),
	"match29"=>array("home"=>"japon","visitor"=>"españa"),
	"match30"=>array("home"=>"costa rica","visitor"=>"alemania"),
	"match31"=>array("home"=>"marruecos","visitor"=>"croacia"),
	"match32"=>array("home"=>"belgica","visitor"=>"canada"),
	"match33"=>array("home"=>"belgica","visitor"=>"marruecos"),
	"match34"=>array("home"=>"croacia","visitor"=>"canada"),
	"match35"=>array("home"=>"croacia","visitor"=>"belgica"),
	"match36"=>array("home"=>"canada","visitor"=>"marruecos"),
	"match37"=>array("home"=>"suiza","visitor"=>"camerun"),
	"match38"=>array("home"=>"brasil","visitor"=>"serbia"),
	"match39"=>array("home"=>"camerun","visitor"=>"serbia"),
	"match40"=>array("home"=>"brasil","visitor"=>"suiza"),
	"match41"=>array("home"=>"serbia","visitor"=>"suiza"),
	"match42"=>array("home"=>"camerun","visitor"=>"brasil"),
	"match43"=>array("home"=>"uruguay","visitor"=>"corea del sur"),
	"match44"=>array("home"=>"portugal","visitor"=>"ghana"),
	"match45"=>array("home"=>"corea del sur","visitor"=>"ghana"),
	"match46"=>array("home"=>"portugal","visitor"=>"uruguay"),
	"match47"=>array("home"=>"corea del sur","visitor"=>"portugal"),
	"match48"=>array("home"=>"ghana","visitor"=>"uruguay")
);

$round1 = array(1,2,7,8,13,14,19,20,25,26,31,32,37,38,43,44);
$round2 = array(3,4,9,10,15,16,21,22,27,28,33,34,39,40,45,46);
$round3 = array(5,6,11,12,17,18,23,24,29,30,35,36,41,42,47,48);

$grupos = ["A","B","C","D","E","F","G","H"];

// Imprimir un array con formato
function debug($var) 
{ 
	$debug = debug_backtrace();
	echo "<pre>";
	echo $debug[0]['file']." ".$debug[0]['line']."<br><br>";
	print_r($var); 
	echo "</pre>";
}