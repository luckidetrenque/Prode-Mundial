<?php
session_start();
if (!isset($_SESSION["autentificado"]) || ($_SESSION["autentificado"]<>"SI")) {
    header ("Location:http://".$_SERVER['HTTP_HOST']."/admin/");
} else {
    require_once '../Classes/db_connection.php';
    require_once '../Classes/functions.php';

        //Traer todos los datos de la tabla resultados
        $sql = "SELECT SQL_CACHE resultados_fase_grupos.* FROM resultados_fase_grupos";
        $data = selectData($conexion,$sql);
?>
<!DOCTYPE html>
<html lang="es">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Prode Mundial Catar 2022 - Administración</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="../css/styles.css" media="all">
      <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
  </head>

  <body id="admin">
      <div class="main-container">
        <header class="header">
            <div class="header__up">
            <img class="logo" src="../assets/images/upj_logo.png"
            alt="Unión Personal Jerárquico del Banco de la Provincia de Buenos Aires">
            <h1 class="main__title">PRODE MUNDIAL<span>QATAR 2022</span></h1>
            </div>
            <ul class="breadcrumb">
            <li><i class="fa-solid fa-house"></i><a href="/">Principal</a></li>
            <li><i class="fa-solid fa-lock"></i><a href="/admin/index.php">Administración</a></li>
            <li><i class="fa-solid fa-database"></i><a href="/admin/cargar-resultados-fase-grupos.php">Cargar Resultados</a></li>
            </ul>
      </header>
        <main class="main">
            <h2>Resultados de la Fase de Grupos</h2>
              <?php
              if (isset($_POST["load"])) {
                  //Limpiar todos los campos recibidos
                  isset($_POST["grupos1"]) ? $grupos1 = cleanFields($_POST["grupos1"]) : $grupos1 = "";
                  isset($_POST["grupos2"]) ? $grupos2 = cleanFields($_POST["grupos2"]) : $grupos2 = "";
                  isset($_POST["grupos3"]) ? $grupos3 = cleanFields($_POST["grupos3"]) : $grupos3 = "";
                  isset($_POST["grupos4"]) ? $grupos4 = cleanFields($_POST["grupos4"]) : $grupos4 = "";
                  isset($_POST["grupos5"]) ? $grupos5 = cleanFields($_POST["grupos5"]) : $grupos5 = "";
                  isset($_POST["grupos6"]) ? $grupos6 = cleanFields($_POST["grupos6"]) : $grupos6 = "";
                  isset($_POST["grupos7"]) ? $grupos7 = cleanFields($_POST["grupos7"]) : $grupos7 = "";
                  isset($_POST["grupos8"]) ? $grupos8 = cleanFields($_POST["grupos8"]) : $grupos8 = "";
                  isset($_POST["grupos9"]) ? $grupos9 = cleanFields($_POST["grupos9"]) : $grupos9 = "";
                  isset($_POST["grupos10"]) ? $grupos10 = cleanFields($_POST["grupos10"]) : $grupos10 = "";
                  isset($_POST["grupos11"]) ? $grupos11 = cleanFields($_POST["grupos11"]) : $grupos11 = "";
                  isset($_POST["grupos12"]) ? $grupos12 = cleanFields($_POST["grupos12"]) : $grupos12 = "";
                  isset($_POST["grupos13"]) ? $grupos13 = cleanFields($_POST["grupos13"]) : $grupos13 = "";
                  isset($_POST["grupos14"]) ? $grupos14 = cleanFields($_POST["grupos14"]) : $grupos14 = "";
                  isset($_POST["grupos15"]) ? $grupos15 = cleanFields($_POST["grupos15"]) : $grupos15 = "";
                  isset($_POST["grupos16"]) ? $grupos16 = cleanFields($_POST["grupos16"]) : $grupos16 = "";
                  isset($_POST["grupos17"]) ? $grupos17 = cleanFields($_POST["grupos17"]) : $grupos17 = "";
                  isset($_POST["grupos18"]) ? $grupos18 = cleanFields($_POST["grupos18"]) : $grupos18 = "";
                  isset($_POST["grupos19"]) ? $grupos19 = cleanFields($_POST["grupos19"]) : $grupos19 = "";
                  isset($_POST["grupos20"]) ? $grupos20 = cleanFields($_POST["grupos20"]) : $grupos20 = "";
                  isset($_POST["grupos21"]) ? $grupos21 = cleanFields($_POST["grupos21"]) : $grupos21 = "";
                  isset($_POST["grupos22"]) ? $grupos22 = cleanFields($_POST["grupos22"]) : $grupos22 = "";
                  isset($_POST["grupos23"]) ? $grupos23 = cleanFields($_POST["grupos23"]) : $grupos23 = "";
                  isset($_POST["grupos24"]) ? $grupos24 = cleanFields($_POST["grupos24"]) : $grupos24 = "";
                  isset($_POST["grupos25"]) ? $grupos25 = cleanFields($_POST["grupos25"]) : $grupos25 = "";
                  isset($_POST["grupos26"]) ? $grupos26 = cleanFields($_POST["grupos26"]) : $grupos26 = "";
                  isset($_POST["grupos27"]) ? $grupos27 = cleanFields($_POST["grupos27"]) : $grupos27 = "";
                  isset($_POST["grupos28"]) ? $grupos28 = cleanFields($_POST["grupos28"]) : $grupos28 = "";
                  isset($_POST["grupos29"]) ? $grupos29 = cleanFields($_POST["grupos29"]) : $grupos29 = "";
                  isset($_POST["grupos30"]) ? $grupos30 = cleanFields($_POST["grupos30"]) : $grupos30 = "";
                  isset($_POST["grupos31"]) ? $grupos31 = cleanFields($_POST["grupos31"]) : $grupos31 = "";
                  isset($_POST["grupos32"]) ? $grupos32 = cleanFields($_POST["grupos32"]) : $grupos32 = "";
                  isset($_POST["grupos33"]) ? $grupos33 = cleanFields($_POST["grupos33"]) : $grupos33 = "";
                  isset($_POST["grupos34"]) ? $grupos34 = cleanFields($_POST["grupos34"]) : $grupos34 = "";
                  isset($_POST["grupos35"]) ? $grupos35 = cleanFields($_POST["grupos35"]) : $grupos35 = "";
                  isset($_POST["grupos36"]) ? $grupos36 = cleanFields($_POST["grupos36"]) : $grupos36 = "";
                  isset($_POST["grupos37"]) ? $grupos37 = cleanFields($_POST["grupos37"]) : $grupos37 = "";
                  isset($_POST["grupos38"]) ? $grupos38 = cleanFields($_POST["grupos38"]) : $grupos38 = "";
                  isset($_POST["grupos39"]) ? $grupos39 = cleanFields($_POST["grupos39"]) : $grupos39 = "";
                  isset($_POST["grupos40"]) ? $grupos40 = cleanFields($_POST["grupos40"]) : $grupos40 = "";
                  isset($_POST["grupos41"]) ? $grupos41 = cleanFields($_POST["grupos41"]) : $grupos41 = "";
                  isset($_POST["grupos42"]) ? $grupos42 = cleanFields($_POST["grupos42"]) : $grupos42 = "";
                  isset($_POST["grupos43"]) ? $grupos43 = cleanFields($_POST["grupos43"]) : $grupos43 = "";
                  isset($_POST["grupos44"]) ? $grupos44 = cleanFields($_POST["grupos44"]) : $grupos44 = "";
                  isset($_POST["grupos45"]) ? $grupos45 = cleanFields($_POST["grupos45"]) : $grupos45 = "";
                  isset($_POST["grupos46"]) ? $grupos46 = cleanFields($_POST["grupos46"]) : $grupos46 = "";
                  isset($_POST["grupos47"]) ? $grupos47 = cleanFields($_POST["grupos47"]) : $grupos47 = "";
                  isset($_POST["grupos48"]) ? $grupos48 = cleanFields($_POST["grupos48"]) : $grupos48 = "";

                  // Actualizar la tabla resultados
                  $sql = "UPDATE resultados_fase_grupos SET grupos1 = '$grupos1', grupos2 = '$grupos2', grupos3 = '$grupos3', grupos4 = '$grupos4', grupos5 = '$grupos5', grupos6 = '$grupos6', grupos7 = '$grupos7', grupos8 = '$grupos8', grupos9 = '$grupos9', grupos10 = '$grupos10', grupos11 = '$grupos11', grupos12 = '$grupos12', grupos13 = '$grupos13', grupos14 = '$grupos14', grupos15 = '$grupos15', grupos16 = '$grupos16', grupos17 = '$grupos17', grupos18 = '$grupos18', grupos19 = '$grupos19', grupos20 = '$grupos20', grupos21 = '$grupos21', grupos22 = '$grupos22', grupos23 = '$grupos23', grupos24 = '$grupos24', grupos25 = '$grupos25', grupos26 = '$grupos26', grupos27 = '$grupos27', grupos28 = '$grupos28', grupos29 = '$grupos29', grupos30 = '$grupos30', grupos31 = '$grupos31', grupos32 = '$grupos32', grupos33 = '$grupos33', grupos34 = '$grupos34', grupos35 = '$grupos35', grupos36 = '$grupos36', grupos37 = '$grupos37', grupos38 = '$grupos38', grupos39 = '$grupos39', grupos40 = '$grupos40', grupos41 = '$grupos41', grupos42 = '$grupos42', grupos43 = '$grupos43', grupos44 = '$grupos44', grupos45 = '$grupos45', grupos46 = '$grupos46', grupos47 = '$grupos47', grupos48 = '$grupos48'";
                  updateData($conexion,$sql);
                  // Duerme durante cinco segundos.
                  sleep(5);

                  // Redirigir utilizando el encabezado de ubicación
                  header ("Location:http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
              } else {
                  ?>
            <div id="groups-content" class="groups-content">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <table id="group-a" class="group-table">
                      <caption>GRUPO A</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td><input type="radio" name="grupos1" id="qatar1" value="qatar"></td>
                              <td><label for="qatar1"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"><span>qatar</span></td>
                              <td><input type="radio" name="grupos1" id="empate" value="empate"></td>
                              <td><label for="ecuador1"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"><span>ecuador</span></td>
                              <td><input type="radio" name="grupos1" id="ecuador1" value="ecuador"></td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td><input type="radio" name="grupos2" id="senegal2" value="senegal"></td>
                              <td><label for="senegal2"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"><span>senegal</span></td>
                              <td><input type="radio" name="grupos2" id="empate" value="empate"></td>
                              <td><label for="paises-bajos2"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"><span>paises bajos</span></td>
                              <td><input type="radio" name="grupos2" id="paises-bajos2" value="paises bajos"></td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td><input type="radio" name="grupos3" id="qatar3" value="qatar"></td>
                              <td><label for="qatar3"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"><span>qatar</span></td>
                              <td><input type="radio" name="grupos3" id="empate" value="empate"></td>
                              <td><label for="senegal3"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"><span>senegal</span></td>
                              <td><input type="radio" name="grupos3" id="senegal3" value="senegal"></td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td><input type="radio" name="grupos4" id="paises-bajos4" value="paises bajos"></td>
                              <td><label for="paises-bajos4"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"><span>paises bajos</span></td>
                              <td><input type="radio" name="grupos4" id="empate" value="empate"></td>
                              <td><label for="ecuador4"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"><span>ecuador</span></td>
                              <td><input type="radio" name="grupos4" id="ecuador4" value="ecuador"></td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td><input type="radio" name="grupos5" id="ecuador5" value="ecuador"></td>
                              <td><label for="ecuador5"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"><span>ecuador</span></td>
                              <td><input type="radio" name="grupos5" id="empate" value="empate"></td>
                              <td><label for="senegal5"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"><span>senegal</span></td>
                              <td><input type="radio" name="grupos5" id="senegal5" value="senegal"></td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td><input type="radio" name="grupos6" id="paises-bajos6" value="paises bajos"></td>
                              <td><label for="paises-bajos6"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"><span>paises bajos</span></td>
                              <td><input type="radio" name="grupos6" id="empate" value="empate"></td>
                              <td><label for="qatar6"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"><span>qatar</span></td>
                              <td><input type="radio" name="grupos6" id="qatar6" value="qatar"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-b" class="group-table">
                      <caption>GRUPO B</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>7</td>
                              <td><input type="radio" name="grupos7" id="inglaterra7" value="inglaterra"></td>
                              <td><label for="inglaterra7"><img src="/assets/images/flags/32/England.png" alt="" class="flag"><span>inglaterra</span></td>
                              <td><input type="radio" name="grupos7" id="empate" value="empate"></td>
                              <td><label for="iran7"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"><span>iran</span></td>
                              <td><input type="radio" name="grupos7" id="iran7" value="iran"></td>
                          </tr>
                          <tr>
                              <td>8</td>
                              <td><input type="radio" name="grupos8" id="estados-unidos8" value="estados unidos"></td>
                              <td><label for="estados-unidos8"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"><span>estados unidos</span></td>
                              <td><input type="radio" name="grupos8" id="empate" value="empate"></td>
                              <td><label for="gales8"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"><span>gales</span></td>
                              <td><input type="radio" name="grupos8" id="gales8" value="gales"></td>
                          </tr>
                          <tr>
                              <td>9</td>
                              <td><input type="radio" name="grupos9" id="gales9" value="gales"></td>
                              <td><label for="gales9"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"><span>gales</span></td>
                              <td><input type="radio" name="grupos9" id="empate" value="empate"></td>
                              <td><label for="iran9"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"><span>iran</span></td>
                              <td><input type="radio" name="grupos9" id="iran9" value="iran"></td>
                          </tr>
                          <tr>
                              <td>10</td>
                              <td><input type="radio" name="grupos10" id="inglaterra10" value="inglaterra"></td>
                              <td><label for="inglaterra10"><img src="/assets/images/flags/32/England.png" alt="" class="flag"><span>inglaterra</span></td>
                              <td><input type="radio" name="grupos10" id="empate" value="empate"></td>
                              <td><label for="estados-unidos10"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"><span>estados unidos</span></td>
                              <td><input type="radio" name="grupos10" id="estados-unidos10" value="estados unidos"></td>
                          </tr>
                          <tr>
                              <td>11</td>
                              <td><input type="radio" name="grupos11" id="iran11" value="iran"></td>
                              <td><label for="iran11"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"><span>iran</span></td>
                              <td><input type="radio" name="grupos11" id="empate" value="empate"></td>
                              <td><label for="estados-unidos11"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"><span>estados unidos</span></td>
                              <td><input type="radio" name="grupos11" id="estados-unidos11" value="estados unidos"></td>
                          </tr>
                          <tr>
                              <td>12</td>
                              <td><input type="radio" name="grupos12" id="gales12" value="gales"></td>
                              <td><label for="gales12"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"><span>gales</span></td>
                              <td><input type="radio" name="grupos12" id="empate" value="empate"></td>
                              <td><label for="inglaterra12"><img src="/assets/images/flags/32/England.png" alt="" class="flag"><span>inglaterra</span></td>
                              <td><input type="radio" name="grupos12" id="inglaterra12" value="inglaterra"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-c" class="group-table">
                      <caption>GRUPO C</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>13</td>
                              <td><input type="radio" name="grupos13" id="argentina13" value="argentina"></td>
                              <td><label for="argentina13"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"><span>argentina</span></td>
                              <td><input type="radio" name="grupos13" id="empate" value="empate"></td>
                              <td><label for="arabia-saudita13"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"><span>arabia saudita</span></td>
                              <td><input type="radio" name="grupos13" id="arabia-saudita13" value="arabia saudita"></td>
                          </tr>
                          <tr>
                              <td>14</td>
                              <td><input type="radio" name="grupos14" id="mexico14" value="mexico"></td>
                              <td><label for="mexico14"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"><span>mexico</span></td>
                              <td><input type="radio" name="grupos14" id="empate" value="empate"></td>
                              <td><label for="polonia14"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"><span>polonia</span></td>
                              <td><input type="radio" name="grupos14" id="polonia14" value="polonia"></td>
                          </tr>
                          <tr>
                              <td>15</td>
                              <td><input type="radio" name="grupos15" id="polonia15" value="polonia"></td>
                              <td><label for="polonia15"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"><span>polonia</span></td>
                              <td><input type="radio" name="grupos15" id="empate" value="empate"></td>
                              <td><label for="arabia-saudita15"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"><span>arabia saudita</span></td>
                              <td><input type="radio" name="grupos15" id="arabia-saudita15" value="arabia saudita"></td>
                          </tr>
                          <tr>
                              <td>16</td>
                              <td><input type="radio" name="grupos16" id="argentina16" value="argentina"></td>
                              <td><label for="argentina16"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"><span>argentina</span></td>
                              <td><input type="radio" name="grupos16" id="empate" value="empate"></td>
                              <td><label for="mexico16"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"><span>mexico</span></td>
                              <td><input type="radio" name="grupos16" id="mexico16" value="mexico"></td>
                          </tr>
                          <tr>
                              <td>17</td>
                              <td><input type="radio" name="grupos17" id="polonia17" value="polonia"></td>
                              <td><label for="polonia17"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"><span>polonia</span></td>
                              <td><input type="radio" name="grupos17" id="empate" value="empate"></td>
                              <td><label for="argentina17"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"><span>argentina</span></td>
                              <td><input type="radio" name="grupos17" id="argentina17" value="argentina"></td>
                          </tr>
                          <tr>
                              <td>18</td>
                              <td><input type="radio" name="grupos18" id="arabia-saudita18" value="arabia saudita"></td>
                              <td><label for="arabia-saudita18"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"><span>arabia saudita</span></td>
                              <td><input type="radio" name="grupos18" id="empate" value="empate"></td>
                              <td><label for="mexico18"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"><span>mexico</span></td>
                              <td><input type="radio" name="grupos18" id="mexico18" value="mexico"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-d" class="group-table">
                      <caption>GRUPO D</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>19</td>
                              <td><input type="radio" name="grupos19" id="dinamarca19" value="dinamarca"></td>
                              <td><label for="dinamarca19"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"><span>dinamarca</span></td>
                              <td><input type="radio" name="grupos19" id="empate" value="empate"></td>
                              <td><label for="tunez19"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"><span>tunez</span></td>
                              <td><input type="radio" name="grupos19" id="tunez19" value="tunez"></td>
                          </tr>
                          <tr>
                              <td>20</td>
                              <td><input type="radio" name="grupos20" id="francia20" value="francia"></td>
                              <td><label for="francia20"><img src="/assets/images/flags/32/France.png" alt="" class="flag"><span>francia</span></td>
                              <td><input type="radio" name="grupos20" id="empate" value="empate"></td>
                              <td><label for="australia20"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"><span>australia</span></td>
                              <td><input type="radio" name="grupos20" id="australia20" value="australia"></td>
                          </tr>
                          <tr>
                              <td>21</td>
                              <td><input type="radio" name="grupos21" id="tunez21" value="tunez"></td>
                              <td><label for="tunez21"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"><span>tunez</span></td>
                              <td><input type="radio" name="grupos21" id="empate" value="empate"></td>
                              <td><label for="australia21"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"><span>australia</span></td>
                              <td><input type="radio" name="grupos21" id="australia21" value="australia"></td>
                          </tr>
                          <tr>
                              <td>22</td>
                              <td><input type="radio" name="grupos22" id="francia22" value="francia"></td>
                              <td><label for="francia22"><img src="/assets/images/flags/32/France.png" alt="" class="flag"><span>francia</span></td>
                              <td><input type="radio" name="grupos22" id="empate" value="empate"></td>
                              <td><label for="dinamarca22"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"><span>dinamarca</span></td>
                              <td><input type="radio" name="grupos22" id="dinamarca22" value="dinamarca"></td>
                          </tr>
                          <tr>
                              <td>23</td>
                              <td><input type="radio" name="grupos23" id="tunez23" value="tunez"></td>
                              <td><label for="tunez23"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"><span>tunez</span></td>
                              <td><input type="radio" name="grupos23" id="empate" value="empate"></td>
                              <td><label for="francia23"><img src="/assets/images/flags/32/France.png" alt="" class="flag"><span>francia</span></td>
                              <td><input type="radio" name="grupos23" id="francia23" value="francia"></td>
                          </tr>
                          <tr>
                              <td>24</td>
                              <td><input type="radio" name="grupos24" id="australia24" value="australia"></td>
                              <td><label for="australia24"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"><span>australia</span></td>
                              <td><input type="radio" name="grupos24" id="empate" value="empate"></td>
                              <td><label for="dinamarca24"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"><span>dinamarca</span></td>
                              <td><input type="radio" name="grupos24" id="dinamarca24" value="dinamarca"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-e" class="group-table">
                      <caption>GRUPO E</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>25</td>
                              <td><input type="radio" name="grupos25" id="alemania25" value="alemania"></td>
                              <td><label for="alemania25"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"><span>alemania</span></td>
                              <td><input type="radio" name="grupos25" id="empate" value="empate"></td>
                              <td><label for="japon25"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"><span>japon</span></td>
                              <td><input type="radio" name="grupos25" id="japon25" value="japon"></td>
                          </tr>
                          <tr>
                              <td>26</td>
                              <td><input type="radio" name="grupos26" id="españa26" value="españa"></td>
                              <td><label for="españa26"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"><span>españa</span></td>
                              <td><input type="radio" name="grupos26" id="empate" value="empate"></td>
                              <td><label for="costa-rica26"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"><span>costa rica</span></td>
                              <td><input type="radio" name="grupos26" id="costa-rica26" value="costa rica"></td>
                          </tr>
                          <tr>
                            <td>27</td>
                            <td><input type="radio" name="grupos27" id="japon27" value="japon"></td>
                            <td><label for="japon27"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"><span>japon</span></td>
                            <td><input type="radio" name="grupos27" id="empate" value="empate"></td>
                            <td><label for="costa-rica27"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"><span>costa rica</span></td>
                            <td><input type="radio" name="grupos27" id="costa-rica27" value="costa rica"></td>
                          </tr>
                          <tr>
                              <td>28</td>
                              <td><input type="radio" name="grupos28" id="españa28" value="españa"></td>
                              <td><label for="españa28"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"><span>españa</span></td>
                              <td><input type="radio" name="grupos28" id="empate" value="empate"></td>
                              <td><label for="alemania28"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"><span>alemania</span></td>
                              <td><input type="radio" name="grupos28" id="alemania28" value="alemania"></td>
                          </tr>
                          <tr>
                              <td>29</td>
                              <td><input type="radio" name="grupos29" id="japon29" value="japon"></td>
                              <td><label for="japon29"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"><span>japon</span></td>
                              <td><input type="radio" name="grupos29" id="empate" value="empate"></td>
                              <td><label for="españa29"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"><span>españa</span></td>
                              <td><input type="radio" name="grupos29" id="españa29" value="españa"></td>
                          </tr>
                          <tr>
                              <td>30</td>
                              <td><input type="radio" name="grupos30" id="costa-rica30" value="costa rica"></td>
                              <td><label for="costa-rica30"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"><span>costa rica</span></td>
                              <td><input type="radio" name="grupos30" id="empate" value="empate"></td>
                              <td><label for="alemania30"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"><span>alemania</span></td>
                              <td><input type="radio" name="grupos30" id="alemania30" value="alemania"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-f" class="group-table">
                      <caption>GRUPO F</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>31</td>
                              <td><input type="radio" name="grupos31" id="marruecos31" value="marruecos"></td>
                              <td><label for="marruecos31"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"><span>marruecos</span></td>
                              <td><input type="radio" name="grupos31" id="empate" value="empate"></td>
                              <td><label for="croacia31"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"><span>croacia</span></td>
                              <td><input type="radio" name="grupos31" id="croacia31" value="croacia"></td>
                          </tr>
                          <tr>
                              <td>32</td>
                              <td><input type="radio" name="grupos32" id="belgica32" value="belgica"></td>
                              <td><label for="belgica32"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"><span>belgica</span></td>
                              <td><input type="radio" name="grupos32" id="empate" value="empate"></td>
                              <td><label for="canada32"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"><span>canada</span></td>
                              <td><input type="radio" name="grupos32" id="canada32" value="canada"></td>
                          </tr>
                          <tr>
                              <td>33</td>
                              <td><input type="radio" name="grupos33" id="belgica33" value="belgica"></td>
                              <td><label for="belgica33"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"><span>belgica</span></td>
                              <td><input type="radio" name="grupos33" id="empate" value="empate"></td>
                              <td><label for="marruecos33"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"><span>marruecos</span></td>
                              <td><input type="radio" name="grupos33" id="marruecos33" value="marruecos"></td>
                          </tr>
                          <tr>
                              <td>34</td>
                              <td><input type="radio" name="grupos34" id="croacia34" value="croacia"></td>
                              <td><label for="croacia34"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"><span>croacia</span></td>
                              <td><input type="radio" name="grupos34" id="empate" value="empate"></td>
                              <td><label for="canada34"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"><span>canada</span></td>
                              <td><input type="radio" name="grupos34" id="canada34" value="canada"></td>
                          </tr>
                          <tr>
                              <td>35</td>
                              <td><input type="radio" name="grupos35" id="croacia35" value="croacia"></td>
                              <td><label for="croacia35"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"><span>croacia</span></td>
                              <td><input type="radio" name="grupos35" id="empate" value="empate"></td>
                              <td><label for="belgica35"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"><span>belgica</span></td>
                              <td><input type="radio" name="grupos35" id="belgica35" value="belgica"></td>
                          </tr>
                          <tr>
                              <td>36</td>
                              <td><input type="radio" name="grupos36" id="canada36" value="canada"></td>
                              <td><label for="canada36"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"><span>canada</span></td>
                              <td><input type="radio" name="grupos36" id="empate" value="empate"></td>
                              <td><label for="marruecos36"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"><span>marruecos</span></td>
                              <td><input type="radio" name="grupos36" id="marruecos36" value="marruecos"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-g" class="group-table">
                      <caption>GRUPO G</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>37</td>
                              <td><input type="radio" name="grupos37" id="suiza37" value="suiza"></td>
                              <td><label for="suiza37"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"><span>suiza</span></td>
                              <td><input type="radio" name="grupos37" id="empate" value="empate"></td>
                              <td><label for="camerun37"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"><span>camerun</span></td>
                              <td><input type="radio" name="grupos37" id="camerun37" value="camerun"></td>
                          </tr>
                          <tr>
                              <td>38</td>
                              <td><input type="radio" name="grupos38" id="brasil38" value="brasil"></td>
                              <td><label for="brasil38"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"><span>brasil</span></td>
                              <td><input type="radio" name="grupos38" id="empate" value="empate"></td>
                              <td><label for="serbia38"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"><span>serbia</span></td>
                              <td><input type="radio" name="grupos38" id="serbia38" value="serbia"></td>
                          </tr>
                          <tr>
                              <td>39</td>
                              <td><input type="radio" name="grupos39" id="camerun39" value="camerun"></td>
                              <td><label for="camerun39"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"><span>camerun</span></td>
                              <td><input type="radio" name="grupos39" id="empate" value="empate"></td>
                              <td><label for="serbia39"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"><span>serbia</span></td>
                              <td><input type="radio" name="grupos39" id="serbia39" value="serbia"></td>
                          </tr>
                          <tr>
                              <td>40</td>
                              <td><input type="radio" name="grupos40" id="brasil40" value="brasil"></td>
                              <td><label for="brasil40"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"><span>brasil</span></td>
                              <td><input type="radio" name="grupos40" id="empate" value="empate"></td>
                              <td><label for="suiza40"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"><span>suiza</span></td>
                              <td><input type="radio" name="grupos40" id="suiza40" value="suiza"></td>
                          </tr>
                          <tr>
                            <td>41</td>
                            <td><input type="radio" name="grupos41" id="serbia41" value="serbia"></td>
                            <td><label for="serbia41"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"><span>serbia</span></td>
                            <td><input type="radio" name="grupos41" id="empate" value="empate"></td>
                            <td><label for="suiza41"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"><span>suiza</span></td>
                            <td><input type="radio" name="grupos41" id="suiza41" value="suiza"></td>
                          </tr>
                          <tr>
                              <td>42</td>
                              <td><input type="radio" name="grupos42" id="camerun42" value="camerun"></td>
                              <td><label for="camerun42"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"><span>camerun</span></td>
                              <td><input type="radio" name="grupos42" id="empate" value="empate"></td>
                              <td><label for="brasil42"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"><span>brasil</span></td>
                              <td><input type="radio" name="grupos42" id="brasil42" value="brasil"></td>
                          </tr>
                      </tbody>
                  </table>
                  <table id="group-h" class="group-table">
                      <caption>GRUPO H</caption>
                      <thead>
                          <tr>
                              <th></th>
                              <th>L</th>
                              <th>EQUIPO</th>
                              <th>E</th>
                              <th>EQUIPO</th>
                              <th>V</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>43</td>
                              <td><input type="radio" name="grupos43" id="uruguay43" value="uruguay"></td>
                              <td><label for="uruguay43"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"><span>uruguay</span></td>
                              <td><input type="radio" name="grupos43" id="empate" value="empate"></td>
                              <td><label for="corea-del-sur43"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"><span>corea del sur</span></td>
                              <td><input type="radio" name="grupos43" id="corea-del-sur43" value="corea del sur"></td>
                          </tr>
                          <tr>
                              <td>44</td>
                              <td><input type="radio" name="grupos44" id="portugal44" value="portugal"></td>
                              <td><label for="portugal44"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"><span>portugal</span></td>
                              <td><input type="radio" name="grupos44" id="empate" value="empate"></td>
                              <td><label for="ghana44"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"><span>ghana</span></td>
                              <td><input type="radio" name="grupos44" id="ghana44" value="ghana"></td>
                          </tr>
                          <tr>
                              <td>45</td>
                              <td><input type="radio" name="grupos45" id="corea-del-sur45" value="corea del sur"></td>
                              <td><label for="corea-del-sur45"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"><span>corea del sur</span></td>
                              <td><input type="radio" name="grupos45" id="empate" value="empate"></td>
                              <td><label for="ghana45"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"><span>ghana</span></td>
                              <td><input type="radio" name="grupos45" id="ghana45" value="ghana"></td>
                          </tr>
                          <tr>
                              <td>46</td>
                              <td><input type="radio" name="grupos46" id="portugal46" value="portugal"></td>
                              <td><label for="portugal46"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"><span>portugal</span></td>
                              <td><input type="radio" name="grupos46" id="empate" value="empate"></td>
                              <td><label for="uruguay46"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"><span>uruguay</span></td>
                              <td><input type="radio" name="grupos46" id="uruguay46" value="uruguay"></td>
                          </tr>
                          <tr>
                              <td>47</td>
                              <td><input type="radio" name="grupos47" id="corea-del-sur47" value="corea del sur"></td>
                              <td><label for="corea-del-sur47"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"><span>corea del sur</span></td>
                              <td><input type="radio" name="grupos47" id="empate" value="empate"></td>
                              <td><label for="portugal47"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"><span>portugal</span></td>
                              <td><input type="radio" name="grupos47" id="portugal47" value="portugal"></td>
                          </tr>
                          <tr>
                              <td>48</td>
                              <td><input type="radio" name="grupos48" id="ghana48" value="ghana"></td>
                              <td><label for="ghana48"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"><span>ghana</span></td>
                              <td><input type="radio" name="grupos48" id="empate" value="empate"></td>
                              <td><label for="uruguay48"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"><span>uruguay</span></td>
                              <td><input type="radio" name="grupos48" id="uruguay48" value="uruguay"></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <div class="main-item data">
                  <input type="submit" value="Cargar" id="load" name="load">
              </div>
              </form>
                <?php } ?>
          </main>
      </div>
      <script src="../js/scripts.js"></script>
      <script>
      // Copio en un array JS los datos devueltos por la consulta a la base de datos
      const data = <?php echo(json_encode($data)); ?>;
      if (typeof data !== 'undefined' && data.length > 0) {
      // the array is defined and has at least one element
          console.log(data);
          // Selecciono todos los partidos (3 radios por partido)
          const partidos = document.querySelectorAll('input[type=radio]');
          for (let i = 0; i < partidos.length; i += 3) {//Cada partido se conforma por 3 resultados L E V
              let partido = document.getElementsByName(partidos[i].name);
              for (let x = 0; x < partido.length; x++) { //Recorrer los tres resultados posibles
                  if (partido[x].value == data[0][partido[x].name]) {
                      partido[x].checked = true; // Marco el partido
                      // partido[x].disabled = true; // Deshabilito el partido
                      console.log(data[0][partido])
                  }
              }
          }
      }
      </script>
  </body>
</html>
<?php
// Archivo de desconexion a la base de datos
require_once '../Classes/db_disconnection.php';
}
?>