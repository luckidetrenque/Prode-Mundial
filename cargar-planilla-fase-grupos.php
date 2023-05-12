<?php
    // Descomentar linea 3 para deshabilitar la planilla
    // header ("Location:http://".$_SERVER['HTTP_HOST']);
    require_once 'Classes/db_connection.php';
    $codigo = time();
    require_once 'Classes/functions.php';
// ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prode Mundial Catar 2022</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/css/styles.css" media="all">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<body>
    <div class="main-container">
        <header class="header">
            <div class="header__up">
                <img class="logo" src="img/upj_logo.png"
                    alt="Unión Personal Jerárquico del Banco de la Provincia de Buenos Aires">
                <h1 class="main__title">PRODE MUNDIAL<span>QATAR 2022</span></h1>
            </div>
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house"></i><a href="/">Principal</a></li>
                <li><i class="fa-solid fa-file-lines"></i><a href="/cargar-planilla-fase-grupos.php">Cargar Planilla</a></li>
            </ul>
        </header>
        <main class="main">
            <h2>Planilla de la Fase de Grupos</h2>
            <?php
            if (isset($_POST["save"])) {
                //Limpiar todos los campos recibidos
                $nombre = strtoupper(cleanFields($_POST["nombre"]));
                $apellido = strtoupper(cleanFields($_POST["apellido"]));
                $afiliado = strtoupper(cleanFields($_POST["afiliado"]));
                $grupos1 = "empate";
                $grupos2 = "empate";
                $grupos3 = cleanFields($_POST["grupos3"]);
                $grupos4 = cleanFields($_POST["grupos4"]);
                $grupos5 = cleanFields($_POST["grupos5"]);
                $grupos6 = cleanFields($_POST["grupos6"]);
                $grupos7 = "empate";
                $grupos8 = "empate";
                $grupos9 = cleanFields($_POST["grupos9"]);
                $grupos10 = cleanFields($_POST["grupos10"]);
                $grupos11 = cleanFields($_POST["grupos11"]);
                $grupos12 = cleanFields($_POST["grupos12"]);
                $grupos13 = cleanFields($_POST["grupos13"]);
                $grupos14 = cleanFields($_POST["grupos14"]);
                $grupos15 = cleanFields($_POST["grupos15"]);
                $grupos16 = cleanFields($_POST["grupos16"]);
                $grupos17 = cleanFields($_POST["grupos17"]);
                $grupos18 = cleanFields($_POST["grupos18"]);
                $grupos19 = cleanFields($_POST["grupos19"]);
                $grupos20 = cleanFields($_POST["grupos20"]);
                $grupos21 = cleanFields($_POST["grupos21"]);
                $grupos22 = cleanFields($_POST["grupos22"]);
                $grupos23 = cleanFields($_POST["grupos23"]);
                $grupos24 = cleanFields($_POST["grupos24"]);
                $grupos25 = cleanFields($_POST["grupos25"]);
                $grupos26 = cleanFields($_POST["grupos26"]);
                $grupos27 = cleanFields($_POST["grupos27"]);
                $grupos28 = cleanFields($_POST["grupos28"]);
                $grupos29 = cleanFields($_POST["grupos29"]);
                $grupos30 = cleanFields($_POST["grupos30"]);
                $grupos31 = cleanFields($_POST["grupos31"]);
                $grupos32 = cleanFields($_POST["grupos32"]);
                $grupos33 = cleanFields($_POST["grupos33"]);
                $grupos34 = cleanFields($_POST["grupos34"]);
                $grupos35 = cleanFields($_POST["grupos35"]);
                $grupos36 = cleanFields($_POST["grupos36"]);
                $grupos37 = cleanFields($_POST["grupos37"]);
                $grupos38 = cleanFields($_POST["grupos38"]);
                $grupos39 = cleanFields($_POST["grupos39"]);
                $grupos40 = cleanFields($_POST["grupos40"]);
                $grupos41 = cleanFields($_POST["grupos41"]);
                $grupos42 = cleanFields($_POST["grupos42"]);
                $grupos43 = cleanFields($_POST["grupos43"]);
                $grupos44 = cleanFields($_POST["grupos44"]);
                $grupos45 = cleanFields($_POST["grupos45"]);
                $grupos46 = cleanFields($_POST["grupos46"]);
                $grupos47 = cleanFields($_POST["grupos47"]);
                $grupos48 = cleanFields($_POST["grupos48"]);
                $codigo = $_POST["codigo"];
                // Consultar si existe la planilla en la tabla participantes, si existe informar y si no existe agregarla
                $sql = "SELECT SQL_CACHE participantes_fase_grupos.* FROM participantes_fase_grupos WHERE codigo = '$codigo' LIMIT 1";
                $data = selectData($conexion,$sql);
                if (empty($data)) {
                    // No existe la planilla del participante entonces lo inserto en la tabla 'planillas'
                    $sql = "INSERT INTO participantes_fase_grupos (idParticipante, nombre, apellido, afiliado, grupos1, grupos2, grupos3, grupos4, grupos5, grupos6, grupos7, grupos8, grupos9, grupos10, grupos11, grupos12, grupos13, grupos14, grupos15, grupos16, grupos17, grupos18, grupos19, grupos20, grupos21, grupos22, grupos23, grupos24, grupos25, grupos26, grupos27, grupos28, grupos29, grupos30, grupos31, grupos32, grupos33, grupos34, grupos35, grupos36, grupos37, grupos38, grupos39, grupos40, grupos41, grupos42, grupos43, grupos44, grupos45, grupos46, grupos47, grupos48, codigo) VALUES (NULL, '$nombre', '$apellido', $afiliado, '$grupos1', '$grupos2', '$grupos3', '$grupos4', '$grupos5', '$grupos6', '$grupos7', '$grupos8', '$grupos9', '$grupos10', '$grupos11', '$grupos12', '$grupos13', '$grupos14', '$grupos15', '$grupos16', '$grupos17', '$grupos18', '$grupos19', '$grupos20', '$grupos21', '$grupos22', '$grupos23', '$grupos24', '$grupos25', '$grupos26', '$grupos27', '$grupos28', '$grupos29', '$grupos30', '$grupos31', '$grupos32', '$grupos33', '$grupos34', '$grupos35', '$grupos36', '$grupos37', '$grupos38', '$grupos39', '$grupos40', '$grupos41', '$grupos42', '$grupos43', '$grupos44', '$grupos45', '$grupos46', '$grupos47', '$grupos48', $codigo)";
                    insertData($conexion,$sql,"Planilla");
                    ?>
                    <div class="planilla">
                        <p>El número único de identificación de su planilla es el <span class="planilla__num"><?php echo $codigo; ?></span> y deberá ser presentado para confirmar la misma en el sistema, hasta el día viernes 18 de noviembre de 2022 a las 16:00 horas.</p>
                        <p>Descargar planilla en su dispositivo. <a class="planilla__link" href="descargar-planilla-fase-grupos.php?planilla=<?php echo $codigo; ?>" title="Descargar planilla"><i class="fa-solid fa-download"></i></a></p>
                    </div>
                    <?php
                    } else {
                    // Existe la planilla de ese participante
                    ?>
                        <p class="error">Ya existe la Planilla N° <?php echo $data[0]["codigo"]; ?>) que coincide en nombre, apellido y afiliado.</p>
                        <!-- <p><a href="editar-planilla-fase-grupos.php?participante=<?php echo $data[0]["idParticipante"]; ?>" title="Editar participante">Editar planilla</a></p> -->
                    <?php
                    }
                } else {
                ?>
            <div id="groups-content" class="groups-content">
                <!-- <form action="/fase-final/participantes/mostrar-datos-post.php" method="post"> -->
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
                                <td><input type="radio" name="grupos1" id="qatar1" value="qatar" disabled></td>
                                <td><label for="qatar1"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"><span>qatar</span></td>
                                <td><input type="radio" name="grupos1" id="empate" value="empate" disabled checked></td>
                                <td><label for="ecuador1"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"><span>ecuador</span></td>
                                <td><input type="radio" name="grupos1" id="ecuador1" value="ecuador" disabled></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="radio" name="grupos2" id="senegal2" value="senegal" disabled></td>
                                <td><label for="senegal2"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"><span>senegal</span></td>
                                <td><input type="radio" name="grupos2" id="empate" value="empate" disabled checked></td>
                                <td><label for="paises-bajos2"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"><span>paises bajos</span></td>
                                <td><input type="radio" name="grupos2" id="paises-bajos2" value="paises bajos" disabled></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><input type="radio" name="grupos3" id="qatar3" value="qatar" required></td>
                                <td><label for="qatar3"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"><span>qatar</span></td>
                                <td><input type="radio" name="grupos3" id="empate" value="empate" required></td>
                                <td><label for="senegal3"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"><span>senegal</span></td>
                                <td><input type="radio" name="grupos3" id="senegal3" value="senegal" required></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><input type="radio" name="grupos4" id="paises-bajos4" value="paises bajos" required></td>
                                <td><label for="paises-bajos4"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"><span>paises bajos</span></td>
                                <td><input type="radio" name="grupos4" id="empate" value="empate" required></td>
                                <td><label for="ecuador4"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"><span>ecuador</span></td>
                                <td><input type="radio" name="grupos4" id="ecuador4" value="ecuador" required></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><input type="radio" name="grupos5" id="ecuador5" value="ecuador" required></td>
                                <td><label for="ecuador5"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"><span>ecuador</span></td>
                                <td><input type="radio" name="grupos5" id="empate" value="empate" required></td>
                                <td><label for="senegal5"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"><span>senegal</span></td>
                                <td><input type="radio" name="grupos5" id="senegal5" value="senegal" required></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><input type="radio" name="grupos6" id="paises-bajos6" value="paises bajos" required></td>
                                <td><label for="paises-bajos6"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"><span>paises bajos</span></td>
                                <td><input type="radio" name="grupos6" id="empate" value="empate" required></td>
                                <td><label for="qatar6"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"><span>qatar</span></td>
                                <td><input type="radio" name="grupos6" id="qatar6" value="qatar" required></td>
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
                                <td><input type="radio" name="grupos7" id="inglaterra7" value="inglaterra" disabled></td>
                                <td><label for="inglaterra7"><img src="/assets/images/flags/32/England.png" alt="" class="flag"><span>inglaterra</span></td>
                                <td><input type="radio" name="grupos7" id="empate" value="empate" disabled checked></td>
                                <td><label for="iran7"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"><span>iran</span></td>
                                <td><input type="radio" name="grupos7" id="iran7" value="iran" disabled></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><input type="radio" name="grupos8" id="estados-unidos8" value="estados unidos" disabled></td>
                                <td><label for="estados-unidos8"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"><span>estados unidos</span></td>
                                <td><input type="radio" name="grupos8" id="empate" value="empate" disabled checked></td>
                                <td><label for="gales8"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"><span>gales</span></td>
                                <td><input type="radio" name="grupos8" id="gales8" value="gales" disabled></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><input type="radio" name="grupos9" id="gales9" value="gales" required></td>
                                <td><label for="gales9"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"><span>gales</span></td>
                                <td><input type="radio" name="grupos9" id="empate" value="empate" required></td>
                                <td><label for="iran9"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"><span>iran</span></td>
                                <td><input type="radio" name="grupos9" id="iran9" value="iran" required></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><input type="radio" name="grupos10" id="inglaterra10" value="inglaterra" required></td>
                                <td><label for="inglaterra10"><img src="/assets/images/flags/32/England.png" alt="" class="flag"><span>inglaterra</span></td>
                                <td><input type="radio" name="grupos10" id="empate" value="empate" required></td>
                                <td><label for="estados-unidos10"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"><span>estados unidos</span></td>
                                <td><input type="radio" name="grupos10" id="estados-unidos10" value="estados unidos" required></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td><input type="radio" name="grupos11" id="iran11" value="iran" required></td>
                                <td><label for="iran11"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"><span>iran</span></td>
                                <td><input type="radio" name="grupos11" id="empate" value="empate" required></td>
                                <td><label for="estados-unidos11"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"><span>estados unidos</span></td>
                                <td><input type="radio" name="grupos11" id="estados-unidos11" value="estados unidos" required></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td><input type="radio" name="grupos12" id="gales12" value="gales" required></td>
                                <td><label for="gales12"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"><span>gales</span></td>
                                <td><input type="radio" name="grupos12" id="empate" value="empate" required></td>
                                <td><label for="inglaterra12"><img src="/assets/images/flags/32/England.png" alt="" class="flag"><span>inglaterra</span></td>
                                <td><input type="radio" name="grupos12" id="inglaterra12" value="inglaterra" required></td>
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
                                <td><input type="radio" name="grupos13" id="argentina13" value="argentina" required></td>
                                <td><label for="argentina13"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"><span>argentina</span></td>
                                <td><input type="radio" name="grupos13" id="empate" value="empate" required></td>
                                <td><label for="arabia-saudita13"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"><span>arabia saudita</span></td>
                                <td><input type="radio" name="grupos13" id="arabia-saudita13" value="arabia saudita" required></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td><input type="radio" name="grupos14" id="mexico14" value="mexico" required></td>
                                <td><label for="mexico14"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"><span>mexico</span></td>
                                <td><input type="radio" name="grupos14" id="empate" value="empate" required></td>
                                <td><label for="polonia14"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"><span>polonia</span></td>
                                <td><input type="radio" name="grupos14" id="polonia14" value="polonia" required></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td><input type="radio" name="grupos15" id="polonia15" value="polonia" required></td>
                                <td><label for="polonia15"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"><span>polonia</span></td>
                                <td><input type="radio" name="grupos15" id="empate" value="empate" required></td>
                                <td><label for="arabia-saudita15"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"><span>arabia saudita</span></td>
                                <td><input type="radio" name="grupos15" id="arabia-saudita15" value="arabia saudita" required></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td><input type="radio" name="grupos16" id="argentina16" value="argentina" required></td>
                                <td><label for="argentina16"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"><span>argentina</span></td>
                                <td><input type="radio" name="grupos16" id="empate" value="empate" required></td>
                                <td><label for="mexico16"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"><span>mexico</span></td>
                                <td><input type="radio" name="grupos16" id="mexico16" value="mexico" required></td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td><input type="radio" name="grupos17" id="polonia17" value="polonia" required></td>
                                <td><label for="polonia17"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"><span>polonia</span></td>
                                <td><input type="radio" name="grupos17" id="empate" value="empate" required></td>
                                <td><label for="argentina17"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"><span>argentina</span></td>
                                <td><input type="radio" name="grupos17" id="argentina17" value="argentina" required></td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td><input type="radio" name="grupos18" id="arabia-saudita18" value="arabia saudita" required></td>
                                <td><label for="arabia-saudita18"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"><span>arabia saudita</span></td>
                                <td><input type="radio" name="grupos18" id="empate" value="empate" required></td>
                                <td><label for="mexico18"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"><span>mexico</span></td>
                                <td><input type="radio" name="grupos18" id="mexico18" value="mexico" required></td>
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
                                <td><input type="radio" name="grupos19" id="dinamarca19" value="dinamarca" required></td>
                                <td><label for="dinamarca19"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"><span>dinamarca</span></td>
                                <td><input type="radio" name="grupos19" id="empate" value="empate" required></td>
                                <td><label for="tunez19"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"><span>tunez</span></td>
                                <td><input type="radio" name="grupos19" id="tunez19" value="tunez" required></td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td><input type="radio" name="grupos20" id="francia20" value="francia" required></td>
                                <td><label for="francia20"><img src="/assets/images/flags/32/France.png" alt="" class="flag"><span>francia</span></td>
                                <td><input type="radio" name="grupos20" id="empate" value="empate" required></td>
                                <td><label for="australia20"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"><span>australia</span></td>
                                <td><input type="radio" name="grupos20" id="australia20" value="australia" required></td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td><input type="radio" name="grupos21" id="tunez21" value="tunez" required></td>
                                <td><label for="tunez21"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"><span>tunez</span></td>
                                <td><input type="radio" name="grupos21" id="empate" value="empate" required></td>
                                <td><label for="australia21"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"><span>australia</span></td>
                                <td><input type="radio" name="grupos21" id="australia21" value="australia" required></td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td><input type="radio" name="grupos22" id="francia22" value="francia" required></td>
                                <td><label for="francia22"><img src="/assets/images/flags/32/France.png" alt="" class="flag"><span>francia</span></td>
                                <td><input type="radio" name="grupos22" id="empate" value="empate" required></td>
                                <td><label for="dinamarca22"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"><span>dinamarca</span></td>
                                <td><input type="radio" name="grupos22" id="dinamarca22" value="dinamarca" required></td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td><input type="radio" name="grupos23" id="tunez23" value="tunez" required></td>
                                <td><label for="tunez23"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"><span>tunez</span></td>
                                <td><input type="radio" name="grupos23" id="empate" value="empate" required></td>
                                <td><label for="francia23"><img src="/assets/images/flags/32/France.png" alt="" class="flag"><span>francia</span></td>
                                <td><input type="radio" name="grupos23" id="francia23" value="francia" required></td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td><input type="radio" name="grupos24" id="australia24" value="australia" required></td>
                                <td><label for="australia24"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"><span>australia</span></td>
                                <td><input type="radio" name="grupos24" id="empate" value="empate" required></td>
                                <td><label for="dinamarca24"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"><span>dinamarca</span></td>
                                <td><input type="radio" name="grupos24" id="dinamarca24" value="dinamarca" required></td>
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
                                <td><input type="radio" name="grupos25" id="alemania25" value="alemania" required></td>
                                <td><label for="alemania25"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"><span>alemania</span></td>
                                <td><input type="radio" name="grupos25" id="empate" value="empate" required></td>
                                <td><label for="japon25"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"><span>japon</span></td>
                                <td><input type="radio" name="grupos25" id="japon25" value="japon" required></td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td><input type="radio" name="grupos26" id="españa26" value="españa" required></td>
                                <td><label for="españa26"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"><span>españa</span></td>
                                <td><input type="radio" name="grupos26" id="empate" value="empate" required></td>
                                <td><label for="costa-rica26"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"><span>costa rica</span></td>
                                <td><input type="radio" name="grupos26" id="costa-rica26" value="costa rica" required></td>
                            </tr>
                            <tr>
                              <td>27</td>
                              <td><input type="radio" name="grupos27" id="japon27" value="japon" required></td>
                              <td><label for="japon27"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"><span>japon</span></td>
                              <td><input type="radio" name="grupos27" id="empate" value="empate" required></td>
                              <td><label for="costa-rica27"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"><span>costa rica</span></td>
                              <td><input type="radio" name="grupos27" id="costa-rica27" value="costa rica" required></td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td><input type="radio" name="grupos28" id="españa28" value="españa" required></td>
                                <td><label for="españa28"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"><span>españa</span></td>
                                <td><input type="radio" name="grupos28" id="empate" value="empate" required></td>
                                <td><label for="alemania28"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"><span>alemania</span></td>
                                <td><input type="radio" name="grupos28" id="alemania28" value="alemania" required></td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td><input type="radio" name="grupos29" id="japon29" value="japon" required></td>
                                <td><label for="japon29"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"><span>japon</span></td>
                                <td><input type="radio" name="grupos29" id="empate" value="empate" required></td>
                                <td><label for="españa29"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"><span>españa</span></td>
                                <td><input type="radio" name="grupos29" id="españa29" value="españa" required></td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td><input type="radio" name="grupos30" id="costa-rica30" value="costa rica" required></td>
                                <td><label for="costa-rica30"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"><span>costa rica</span></td>
                                <td><input type="radio" name="grupos30" id="empate" value="empate" required></td>
                                <td><label for="alemania30"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"><span>alemania</span></td>
                                <td><input type="radio" name="grupos30" id="alemania30" value="alemania" required></td>
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
                                <td><input type="radio" name="grupos31" id="marruecos31" value="marruecos" required></td>
                                <td><label for="marruecos31"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"><span>marruecos</span></td>
                                <td><input type="radio" name="grupos31" id="empate" value="empate" required></td>
                                <td><label for="croacia31"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"><span>croacia</span></td>
                                <td><input type="radio" name="grupos31" id="croacia31" value="croacia" required></td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td><input type="radio" name="grupos32" id="belgica32" value="belgica" required></td>
                                <td><label for="belgica32"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"><span>belgica</span></td>
                                <td><input type="radio" name="grupos32" id="empate" value="empate" required></td>
                                <td><label for="canada32"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"><span>canada</span></td>
                                <td><input type="radio" name="grupos32" id="canada32" value="canada" required></td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td><input type="radio" name="grupos33" id="belgica33" value="belgica" required></td>
                                <td><label for="belgica33"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"><span>belgica</span></td>
                                <td><input type="radio" name="grupos33" id="empate" value="empate" required></td>
                                <td><label for="marruecos33"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"><span>marruecos</span></td>
                                <td><input type="radio" name="grupos33" id="marruecos33" value="marruecos" required></td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td><input type="radio" name="grupos34" id="croacia34" value="croacia" required></td>
                                <td><label for="croacia34"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"><span>croacia</span></td>
                                <td><input type="radio" name="grupos34" id="empate" value="empate" required></td>
                                <td><label for="canada34"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"><span>canada</span></td>
                                <td><input type="radio" name="grupos34" id="canada34" value="canada" required></td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td><input type="radio" name="grupos35" id="croacia35" value="croacia" required></td>
                                <td><label for="croacia35"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"><span>croacia</span></td>
                                <td><input type="radio" name="grupos35" id="empate" value="empate" required></td>
                                <td><label for="belgica35"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"><span>belgica</span></td>
                                <td><input type="radio" name="grupos35" id="belgica35" value="belgica" required></td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td><input type="radio" name="grupos36" id="canada36" value="canada" required></td>
                                <td><label for="canada36"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"><span>canada</span></td>
                                <td><input type="radio" name="grupos36" id="empate" value="empate" required></td>
                                <td><label for="marruecos36"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"><span>marruecos</span></td>
                                <td><input type="radio" name="grupos36" id="marruecos36" value="marruecos" required></td>
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
                                <td><input type="radio" name="grupos37" id="suiza37" value="suiza" required></td>
                                <td><label for="suiza37"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"><span>suiza</span></td>
                                <td><input type="radio" name="grupos37" id="empate" value="empate" required></td>
                                <td><label for="camerun37"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"><span>camerun</span></td>
                                <td><input type="radio" name="grupos37" id="camerun37" value="camerun" required></td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td><input type="radio" name="grupos38" id="brasil38" value="brasil" required></td>
                                <td><label for="brasil38"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"><span>brasil</span></td>
                                <td><input type="radio" name="grupos38" id="empate" value="empate" required></td>
                                <td><label for="serbia38"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"><span>serbia</span></td>
                                <td><input type="radio" name="grupos38" id="serbia38" value="serbia" required></td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td><input type="radio" name="grupos39" id="camerun39" value="camerun" required></td>
                                <td><label for="camerun39"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"><span>camerun</span></td>
                                <td><input type="radio" name="grupos39" id="empate" value="empate" required></td>
                                <td><label for="serbia39"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"><span>serbia</span></td>
                                <td><input type="radio" name="grupos39" id="serbia39" value="serbia" required></td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td><input type="radio" name="grupos40" id="brasil40" value="brasil" required></td>
                                <td><label for="brasil40"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"><span>brasil</span></td>
                                <td><input type="radio" name="grupos40" id="empate" value="empate" required></td>
                                <td><label for="suiza40"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"><span>suiza</span></td>
                                <td><input type="radio" name="grupos40" id="suiza40" value="suiza" required></td>
                            </tr>
                            <tr>
                              <td>41</td>
                              <td><input type="radio" name="grupos41" id="serbia41" value="serbia" required></td>
                              <td><label for="serbia41"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"><span>serbia</span></td>
                              <td><input type="radio" name="grupos41" id="empate" value="empate" required></td>
                              <td><label for="suiza41"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"><span>suiza</span></td>
                              <td><input type="radio" name="grupos41" id="suiza41" value="suiza" required></td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td><input type="radio" name="grupos42" id="camerun42" value="camerun" required></td>
                                <td><label for="camerun42"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"><span>camerun</span></td>
                                <td><input type="radio" name="grupos42" id="empate" value="empate" required></td>
                                <td><label for="brasil42"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"><span>brasil</span></td>
                                <td><input type="radio" name="grupos42" id="brasil42" value="brasil" required></td>
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
                                <td><input type="radio" name="grupos43" id="uruguay43" value="uruguay" required></td>
                                <td><label for="uruguay43"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"><span>uruguay</span></td>
                                <td><input type="radio" name="grupos43" id="empate" value="empate" required></td>
                                <td><label for="corea-del-sur43"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"><span>corea del sur</span></td>
                                <td><input type="radio" name="grupos43" id="corea-del-sur43" value="corea del sur" required></td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td><input type="radio" name="grupos44" id="portugal44" value="portugal" required></td>
                                <td><label for="portugal44"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"><span>portugal</span></td>
                                <td><input type="radio" name="grupos44" id="empate" value="empate" required></td>
                                <td><label for="ghana44"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"><span>ghana</span></td>
                                <td><input type="radio" name="grupos44" id="ghana44" value="ghana" required></td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td><input type="radio" name="grupos45" id="corea-del-sur45" value="corea del sur" required></td>
                                <td><label for="corea-del-sur45"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"><span>corea del sur</span></td>
                                <td><input type="radio" name="grupos45" id="empate" value="empate" required></td>
                                <td><label for="ghana45"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"><span>ghana</span></td>
                                <td><input type="radio" name="grupos45" id="ghana45" value="ghana" required></td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td><input type="radio" name="grupos46" id="portugal46" value="portugal" required></td>
                                <td><label for="portugal46"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"><span>portugal</span></td>
                                <td><input type="radio" name="grupos46" id="empate" value="empate" required></td>
                                <td><label for="uruguay46"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"><span>uruguay</span></td>
                                <td><input type="radio" name="grupos46" id="uruguay46" value="uruguay" required></td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td><input type="radio" name="grupos47" id="corea-del-sur47" value="corea del sur" required></td>
                                <td><label for="corea-del-sur47"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"><span>corea del sur</span></td>
                                <td><input type="radio" name="grupos47" id="empate" value="empate" required></td>
                                <td><label for="portugal47"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"><span>portugal</span></td>
                                <td><input type="radio" name="grupos47" id="portugal47" value="portugal" required></td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td><input type="radio" name="grupos48" id="ghana48" value="ghana" required></td>
                                <td><label for="ghana48"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"><span>ghana</span></td>
                                <td><input type="radio" name="grupos48" id="empate" value="empate" required></td>
                                <td><label for="uruguay48"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"><span>uruguay</span></td>
                                <td><input type="radio" name="grupos48" id="uruguay48" value="uruguay" required></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
                <div class="main-item data">
                    <p>
                    <label for="nombre">NOMBRE:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Escrib&iacute; tu nombre" value="" required  style="background-color: transparent;">
                    </p>
                    <p>
                    <label for="apellido">APELLIDO:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Escrib&iacute; tu apellido" value="" required  style="background-color: transparent;">
                    </p>
                    <p>
                    <label for="afiliado">N° AFILIADO:</label>
                    <input type="number" name="afiliado" id="afiliado" placeholder="Escrib&iacute; tu n&uacute;mero de afiliado" min="1" max="99999999" pattern="[0-9]+" value="" required  style="background-color: transparent;">
                    </p>
                    <input type="submit" value="Guardar" id="save" name="save">
                    <input type="hidden" value="<?php if (isset($codigo)) { echo $codigo; } ?>" id="codigo" name="codigo" />
                </form>
            </div>
        </main>
    </div>
    <script src="/js/scripts.js"></script>
</body>
</html>
<?php
// Archivo de desconexion a la base de datos
require_once 'Classes/db_disconnection.php';
}
?>