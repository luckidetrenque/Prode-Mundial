<?php
require_once 'Classes/db_connection.php';
require_once 'Classes/functions.php';
?>
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
        <style>
        td:nth-child(1) {
            background-color: transparent;
            font-weight: normal;
        }
        </style>
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
                <li><i class="fa-solid fa-award"></i><a href="/posiciones-fase-grupos.php">Posiciones</a></li>
            </ul>
            </header>

            <main class="main">
                <h2>Tabla de posiciones</h2>
                <div class="places">
                    <div class="place"><span class="place__color place__color--first">1</span><span class="place__reference first-place">Oro</span></div>
                    <div class="place"><span class="place__color place__color--second">2</span><span class="place__reference second-place">Plata</span></div>
                    <!-- <div class="place"><span class="place__color place__color--third">3</span><span class="place__reference third-place">Bronce</span></div>
                    <div class="place"><span class="place__color place__color--fourth">4</span><span class="place__reference fourth-place">Aluminio</span></div>
                    <div class="place"><span class="place__color place__color--fifth">5</span><span class="place__reference fifth-place">Cobre</span></div> -->
                </div>
            <?php
                // Establecer la zona horaria predeterminada a usar.
                date_default_timezone_set('America/Argentina/Buenos_Aires');
                $today = date('d/m/Y',time()-18000);//+5 horas de diferencia
                $yesterday = date('d/m/Y',time()-104400);
                $sql = "SELECT SQL_CACHE participantes_fase_grupos.* FROM participantes_fase_grupos WHERE confirmada = 1";
                $data = selectData($conexion,$sql);
                $sql = "SELECT SQL_CACHE resultados_fase_grupos.* FROM resultados_fase_grupos";
                $data1 = selectData($conexion,$sql);
                if (empty($data) && empty($data1)) {
                    ?>
                    <p class="warning">No hay datos cargados en la base de datos.</p>
                    <?php
                    } else {
                        for ($i = 0, $size = count($data); $i < $size; ++$i) {
                            $points = 0;
                            for ($x = 1; $x <= 48; ++$x) {
                                if ($data[$i]["grupos".$x] === $data1[0]["grupos".$x]) {
                                    $points++;
                                }
                            }
                            $positions[$i+1]["planilla"] = $data[$i]["codigo"];
                            $positions[$i+1]["nombre"] = $data[$i]["nombre"];
                            $positions[$i+1]["apellido"] = $data[$i]["apellido"];
                            $positions[$i+1]["afiliado"] = $data[$i]["afiliado"];
                            // $positions[$i+1]["oficina"] = getOffice($offices,$data[$i]["oficina"]);
                            $positions[$i+1]["puntos"] = $points;
                        }
                        $aux = array();
                        foreach ($positions as $player => $puntuation) {
                            $aux[$puntuation["puntos"]."_".$player] = $puntuation; //also add the index to the key to avoid duplicates
                        }

                        krsort($aux, SORT_NUMERIC); //because the keys are strings (they contain an underscore) by default it will compare lexographically. The flag enforces numerical comparison on the part that can be converted to a number (i.e. the population)
                        $positions = array_values($aux);
                    ?>
                <table class="positions">
                    <caption>Posiciones según resultados computados hasta el día <?=$today?>.</caption>
                    <thead>
                    <tr>
                        <th>Puesto</th>
                        <th>Participante (Afiliado N°)</th>
                        <th>Planilla N°</th>
                        <th>Puntos</th>
                    </tr>
                    </thead>
                    <?php
                    // Cálculo de participantes a mostrar en cada página #page
                    $players = count($positions);
                    $pages = floor($players / 20); //veces a imprimir de a 20
                    $rest = $players % 20; //resto a imprimir
                    $index = 0;
                    $pos = 0;
                    $points = 0;
                    for ($i = 0; $i < $pages; ++$i) { ?>
                    <tbody id="page<?=$i+1?>">
                    <?php
                        for ($x = 0; $x < 20; ++$x) { // 20 por pagina
                            if ($positions[$index]["puntos"] <> $points) {
                                ++$pos;
                            }
                            $points = $positions[$index]["puntos"];
                        ?>
                        <tr>
                            <td><?=$pos?></td>
                            <td><?=htmlspecialchars_decode($positions[$index]["nombre"])." ".$positions[$index]["apellido"]." (".$positions[$index]["afiliado"].")"?></td>
                            <td><?= $positions[$index]["planilla"] ?><a href="ver-planilla-fase-grupos.php?planilla=<?= $positions[$index]["planilla"] ?>" title="Ver planilla" target="_blank"><i class="fa-solid fa-magnifying-glass fa-more"></i></a></td>
                            <td><?=$positions[$index]["puntos"]?></td>
                        </tr>
                    <?php ++$index;
                    } ?>
                    </tbody>
                    <?php }?>
                    <tbody id="page<?=$i+1?>">
                    <?php
                        for ($r = 0; $r < $rest; ++$r) {
                            if ($positions[$index]["puntos"] <> $points) {
                                ++$pos;
                            }
                            $points = $positions[$index]["puntos"];
                        ?>
                        <tr>
                            <td><?=$pos?></td>
                            <td><?=htmlspecialchars_decode($positions[$index]["nombre"])." ".$positions[$index]["apellido"]." (".$positions[$index]["afiliado"].")"?></td>
                            <td><?= $positions[$index]["planilla"] ?><a href="ver-planilla-fase-grupos.php?planilla=<?= $positions[$index]["planilla"] ?>" title="Ver planilla" target="_blank"><i class="fa-solid fa-magnifying-glass fa-more"></i></a></td>
                            <td><?=$positions[$index]["puntos"]?></td>
                        </tr>
                    <?php ++$index;
                    } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <a href="#" onclick="showPosition('page1');">1</a>
                                <a href="#" onclick="showPosition('page2');">2</a>
                                <a href="#" onclick="showPosition('page3');">3</a>
                                <a href="#" onclick="showPosition('page4');">4</a>
                                <a href="#" onclick="showPosition('page5');">5</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            <?php } ?>
            </main>
        </div>
        <script src="/js/scripts.js"></script>
    </body>
</html>
<?php
// Archivo de desconexion a la base de datos
require_once 'Classes/db_disconnection.php';
?>