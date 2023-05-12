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
            <li><i class="fa-solid fa-chart-simple"></i><a href="/estadisticas-fase-grupos.php">Estadísticas</a></li>
          </ul>
        </header>
        <main class="main">
          <h2>Apuestas de la Fase de Grupos</h2>
        <?php
        $sql = "SELECT
            SUM(CASE WHEN grupos1 = 'qatar' THEN 1 ELSE 0 END) L1,
            SUM(CASE WHEN grupos1 = 'empate' THEN 1 ELSE 0 END) E1,
            SUM(CASE WHEN grupos1 = 'ecuador' THEN 1 ELSE 0 END) V1,
            SUM(CASE WHEN grupos2 = 'senegal' THEN 1 ELSE 0 END) L2,
            SUM(CASE WHEN grupos2 = 'empate' THEN 1 ELSE 0 END) E2,
            SUM(CASE WHEN grupos2 = 'paises bajos' THEN 1 ELSE 0 END) V2,
            SUM(CASE WHEN grupos3 = 'qatar' THEN 1 ELSE 0 END) L3,
            SUM(CASE WHEN grupos3 = 'empate' THEN 1 ELSE 0 END) E3,
            SUM(CASE WHEN grupos3 = 'senegal' THEN 1 ELSE 0 END) V3,
            SUM(CASE WHEN grupos4 = 'paises bajos' THEN 1 ELSE 0 END) L4,
            SUM(CASE WHEN grupos4 = 'empate' THEN 1 ELSE 0 END) E4,
            SUM(CASE WHEN grupos4 = 'ecuador' THEN 1 ELSE 0 END) V4,
            SUM(CASE WHEN grupos5 = 'ecuador' THEN 1 ELSE 0 END) L5,
            SUM(CASE WHEN grupos5 = 'empate' THEN 1 ELSE 0 END) E5,
            SUM(CASE WHEN grupos5 = 'senegal' THEN 1 ELSE 0 END) V5,
            SUM(CASE WHEN grupos6 = 'paises bajos' THEN 1 ELSE 0 END) L6,
            SUM(CASE WHEN grupos6 = 'empate' THEN 1 ELSE 0 END) E6,
            SUM(CASE WHEN grupos6 = 'qatar' THEN 1 ELSE 0 END) V6,
            SUM(CASE WHEN grupos7 = 'inglaterra' THEN 1 ELSE 0 END) L7,
            SUM(CASE WHEN grupos7 = 'empate' THEN 1 ELSE 0 END) E7,
            SUM(CASE WHEN grupos7 = 'iran' THEN 1 ELSE 0 END) V7,
            SUM(CASE WHEN grupos8 = 'estados unidos' THEN 1 ELSE 0 END) L8,
            SUM(CASE WHEN grupos8 = 'empate' THEN 1 ELSE 0 END) E8,
            SUM(CASE WHEN grupos8 = 'gales' THEN 1 ELSE 0 END) V8,
            SUM(CASE WHEN grupos9 = 'gales' THEN 1 ELSE 0 END) L9,
            SUM(CASE WHEN grupos9 = 'empate' THEN 1 ELSE 0 END) E9,
            SUM(CASE WHEN grupos9 = 'iran' THEN 1 ELSE 0 END) V9,
            SUM(CASE WHEN grupos10 = 'inglaterra' THEN 1 ELSE 0 END) L10,
            SUM(CASE WHEN grupos10 = 'empate' THEN 1 ELSE 0 END) E10,
            SUM(CASE WHEN grupos10 = 'estados unidos' THEN 1 ELSE 0 END) V10,
            SUM(CASE WHEN grupos11 = 'iran' THEN 1 ELSE 0 END) L11,
            SUM(CASE WHEN grupos11 = 'empate' THEN 1 ELSE 0 END) E11,
            SUM(CASE WHEN grupos11 = 'estados unidos' THEN 1 ELSE 0 END) V11,
            SUM(CASE WHEN grupos12 = 'gales' THEN 1 ELSE 0 END) L12,
            SUM(CASE WHEN grupos12 = 'empate' THEN 1 ELSE 0 END) E12,
            SUM(CASE WHEN grupos12 = 'inglaterra' THEN 1 ELSE 0 END) V12,
            SUM(CASE WHEN grupos13 = 'argentina' THEN 1 ELSE 0 END) L13,
            SUM(CASE WHEN grupos13 = 'empate' THEN 1 ELSE 0 END) E13,
            SUM(CASE WHEN grupos13 = 'arabia saudita' THEN 1 ELSE 0 END) V13,
            SUM(CASE WHEN grupos14 = 'mexico' THEN 1 ELSE 0 END) L14,
            SUM(CASE WHEN grupos14 = 'empate' THEN 1 ELSE 0 END) E14,
            SUM(CASE WHEN grupos14 = 'polonia' THEN 1 ELSE 0 END) V14,
            SUM(CASE WHEN grupos15 = 'polonia' THEN 1 ELSE 0 END) L15,
            SUM(CASE WHEN grupos15 = 'empate' THEN 1 ELSE 0 END) E15,
            SUM(CASE WHEN grupos15 = 'arabia saudita' THEN 1 ELSE 0 END) V15,
            SUM(CASE WHEN grupos16 = 'argentina' THEN 1 ELSE 0 END) L16,
            SUM(CASE WHEN grupos16 = 'empate' THEN 1 ELSE 0 END) E16,
            SUM(CASE WHEN grupos16 = 'mexico' THEN 1 ELSE 0 END) V16,
            SUM(CASE WHEN grupos17 = 'polonia' THEN 1 ELSE 0 END) L17,
            SUM(CASE WHEN grupos17 = 'empate' THEN 1 ELSE 0 END) E17,
            SUM(CASE WHEN grupos17 = 'argentina' THEN 1 ELSE 0 END) V17,
            SUM(CASE WHEN grupos18 = 'arabia saudita' THEN 1 ELSE 0 END) L18,
            SUM(CASE WHEN grupos18 = 'empate' THEN 1 ELSE 0 END) E18,
            SUM(CASE WHEN grupos18 = 'mexico' THEN 1 ELSE 0 END) V18,
            SUM(CASE WHEN grupos19 = 'dinamarca' THEN 1 ELSE 0 END) L19,
            SUM(CASE WHEN grupos19 = 'empate' THEN 1 ELSE 0 END) E19,
            SUM(CASE WHEN grupos19 = 'tunez' THEN 1 ELSE 0 END) V19,
            SUM(CASE WHEN grupos20 = 'francia' THEN 1 ELSE 0 END) L20,
            SUM(CASE WHEN grupos20 = 'empate' THEN 1 ELSE 0 END) E20,
            SUM(CASE WHEN grupos20 = 'australia' THEN 1 ELSE 0 END) V20,
            SUM(CASE WHEN grupos21 = 'tunez' THEN 1 ELSE 0 END) L21,
            SUM(CASE WHEN grupos21 = 'empate' THEN 1 ELSE 0 END) E21,
            SUM(CASE WHEN grupos21 = 'australia' THEN 1 ELSE 0 END) V21,
            SUM(CASE WHEN grupos22 = 'francia' THEN 1 ELSE 0 END) L22,
            SUM(CASE WHEN grupos22 = 'empate' THEN 1 ELSE 0 END) E22,
            SUM(CASE WHEN grupos22 = 'dinamarca' THEN 1 ELSE 0 END) V22,
            SUM(CASE WHEN grupos23 = 'tunez' THEN 1 ELSE 0 END) L23,
            SUM(CASE WHEN grupos23 = 'empate' THEN 1 ELSE 0 END) E23,
            SUM(CASE WHEN grupos23 = 'francia' THEN 1 ELSE 0 END) V23,
            SUM(CASE WHEN grupos24 = 'australia' THEN 1 ELSE 0 END) L24,
            SUM(CASE WHEN grupos24 = 'empate' THEN 1 ELSE 0 END) E24,
            SUM(CASE WHEN grupos24 = 'dinamarca' THEN 1 ELSE 0 END) V24,
            SUM(CASE WHEN grupos25 = 'alemania' THEN 1 ELSE 0 END) L25,
            SUM(CASE WHEN grupos25 = 'empate' THEN 1 ELSE 0 END) E25,
            SUM(CASE WHEN grupos25 = 'japon' THEN 1 ELSE 0 END) V25,
            SUM(CASE WHEN grupos26 = 'españa' THEN 1 ELSE 0 END) L26,
            SUM(CASE WHEN grupos26 = 'empate' THEN 1 ELSE 0 END) E26,
            SUM(CASE WHEN grupos26 = 'costa rica' THEN 1 ELSE 0 END) V26,
            SUM(CASE WHEN grupos27 = 'japon' THEN 1 ELSE 0 END) L27,
            SUM(CASE WHEN grupos27 = 'empate' THEN 1 ELSE 0 END) E27,
            SUM(CASE WHEN grupos27 = 'costa rica' THEN 1 ELSE 0 END) V27,
            SUM(CASE WHEN grupos28 = 'españa' THEN 1 ELSE 0 END) L28,
            SUM(CASE WHEN grupos28 = 'empate' THEN 1 ELSE 0 END) E28,
            SUM(CASE WHEN grupos28 = 'alemania' THEN 1 ELSE 0 END) V28,
            SUM(CASE WHEN grupos29 = 'japon' THEN 1 ELSE 0 END) L29,
            SUM(CASE WHEN grupos29 = 'empate' THEN 1 ELSE 0 END) E29,
            SUM(CASE WHEN grupos29 = 'españa' THEN 1 ELSE 0 END) V29,
            SUM(CASE WHEN grupos30 = 'costa rica' THEN 1 ELSE 0 END) L30,
            SUM(CASE WHEN grupos30 = 'empate' THEN 1 ELSE 0 END) E30,
            SUM(CASE WHEN grupos30 = 'alemania' THEN 1 ELSE 0 END) V30,
            SUM(CASE WHEN grupos31 = 'marruecos' THEN 1 ELSE 0 END) L31,
            SUM(CASE WHEN grupos31 = 'empate' THEN 1 ELSE 0 END) E31,
            SUM(CASE WHEN grupos31 = 'croacia' THEN 1 ELSE 0 END) V31,
            SUM(CASE WHEN grupos32 = 'belgica' THEN 1 ELSE 0 END) L32,
            SUM(CASE WHEN grupos32 = 'empate' THEN 1 ELSE 0 END) E32,
            SUM(CASE WHEN grupos32 = 'canada' THEN 1 ELSE 0 END) V32,
            SUM(CASE WHEN grupos33 = 'belgica' THEN 1 ELSE 0 END) L33,
            SUM(CASE WHEN grupos33 = 'empate' THEN 1 ELSE 0 END) E33,
            SUM(CASE WHEN grupos33 = 'marruecos' THEN 1 ELSE 0 END) V33,
            SUM(CASE WHEN grupos34 = 'croacia' THEN 1 ELSE 0 END) L34,
            SUM(CASE WHEN grupos34 = 'empate' THEN 1 ELSE 0 END) E34,
            SUM(CASE WHEN grupos34 = 'canada' THEN 1 ELSE 0 END) V34,
            SUM(CASE WHEN grupos35 = 'croacia' THEN 1 ELSE 0 END) L35,
            SUM(CASE WHEN grupos35 = 'empate' THEN 1 ELSE 0 END) E35,
            SUM(CASE WHEN grupos35 = 'belgica' THEN 1 ELSE 0 END) V35,
            SUM(CASE WHEN grupos36 = 'canada' THEN 1 ELSE 0 END) L36,
            SUM(CASE WHEN grupos36 = 'empate' THEN 1 ELSE 0 END) E36,
            SUM(CASE WHEN grupos36 = 'marruecos' THEN 1 ELSE 0 END) V36,
            SUM(CASE WHEN grupos37 = 'suiza' THEN 1 ELSE 0 END) L37,
            SUM(CASE WHEN grupos37 = 'empate' THEN 1 ELSE 0 END) E37,
            SUM(CASE WHEN grupos37 = 'camerun' THEN 1 ELSE 0 END) V37,
            SUM(CASE WHEN grupos38 = 'brasil' THEN 1 ELSE 0 END) L38,
            SUM(CASE WHEN grupos38 = 'empate' THEN 1 ELSE 0 END) E38,
            SUM(CASE WHEN grupos38 = 'serbia' THEN 1 ELSE 0 END) V38,
            SUM(CASE WHEN grupos39 = 'camerun' THEN 1 ELSE 0 END) L39,
            SUM(CASE WHEN grupos39 = 'empate' THEN 1 ELSE 0 END) E39,
            SUM(CASE WHEN grupos39 = 'serbia' THEN 1 ELSE 0 END) V39,
            SUM(CASE WHEN grupos40 = 'brasil' THEN 1 ELSE 0 END) L40,
            SUM(CASE WHEN grupos40 = 'empate' THEN 1 ELSE 0 END) E40,
            SUM(CASE WHEN grupos40 = 'suiza' THEN 1 ELSE 0 END) V40,
            SUM(CASE WHEN grupos41 = 'serbia' THEN 1 ELSE 0 END) L41,
            SUM(CASE WHEN grupos41 = 'empate' THEN 1 ELSE 0 END) E41,
            SUM(CASE WHEN grupos41 = 'suiza' THEN 1 ELSE 0 END) V41,
            SUM(CASE WHEN grupos42 = 'camerun' THEN 1 ELSE 0 END) L42,
            SUM(CASE WHEN grupos42 = 'empate' THEN 1 ELSE 0 END) E42,
            SUM(CASE WHEN grupos42 = 'brasil' THEN 1 ELSE 0 END) V42,
            SUM(CASE WHEN grupos43 = 'uruguay' THEN 1 ELSE 0 END) L43,
            SUM(CASE WHEN grupos43 = 'empate' THEN 1 ELSE 0 END) E43,
            SUM(CASE WHEN grupos43 = 'corea del sur' THEN 1 ELSE 0 END) V43,
            SUM(CASE WHEN grupos44 = 'portugal' THEN 1 ELSE 0 END) L44,
            SUM(CASE WHEN grupos44 = 'empate' THEN 1 ELSE 0 END) E44,
            SUM(CASE WHEN grupos44 = 'ghana' THEN 1 ELSE 0 END) V44,
            SUM(CASE WHEN grupos45 = 'corea del sur' THEN 1 ELSE 0 END) L45,
            SUM(CASE WHEN grupos45 = 'empate' THEN 1 ELSE 0 END) E45,
            SUM(CASE WHEN grupos45 = 'ghana' THEN 1 ELSE 0 END) V45,
            SUM(CASE WHEN grupos46 = 'portugal' THEN 1 ELSE 0 END) L46,
            SUM(CASE WHEN grupos46 = 'empate' THEN 1 ELSE 0 END) E46,
            SUM(CASE WHEN grupos46 = 'uruguay' THEN 1 ELSE 0 END) V46,
            SUM(CASE WHEN grupos47 = 'corea del sur' THEN 1 ELSE 0 END) L47,
            SUM(CASE WHEN grupos47 = 'empate' THEN 1 ELSE 0 END) E47,
            SUM(CASE WHEN grupos47 = 'portugal' THEN 1 ELSE 0 END) V47,
            SUM(CASE WHEN grupos48 = 'ghana' THEN 1 ELSE 0 END) L48,
            SUM(CASE WHEN grupos48 = 'empate' THEN 1 ELSE 0 END) E48,
            SUM(CASE WHEN grupos48 = 'uruguay' THEN 1 ELSE 0 END) V48
            FROM participantes_fase_grupos WHERE confirmada = 1";
        $data = selectData($conexion, $sql);
        // print_r($data);
        if (empty($data)) {
        ?>
          <p class="warning">No hay planillas cargadas en la base de datos.</p>
        <?php
        } else {
        ?>
          <div class="rounds">
            <h3><a href="#" id="round1" class="round-active">Jornada 1</a></h3>
            <h3><a href="#" id="round2">Jornada 2</a></h3>
            <h3><a href="#" id="round3">Jornada 3</a></h3>
          </div>
          <div class="main-container main-container-stats">
            <?php for ($i = 1; $i <= 48; ++$i) {
              if (in_array($i, $round1)) { ?>
                <div class="stats round1-match">
                <?php               } else if (in_array($i, $round2)) { ?>
                  <div class="stats round2-match" style="display: none;">
                  <?php               } else { ?>
                    <div class="stats round3-match" style="display: none;">
                    <?php               } ?>
                    <div>
                      <h3>Partido <?= $i ?></h3>
                      <p><?= ucwords($matches["match" . $i]["home"]) ?> vs. <?= ucwords($matches["match" . $i]["visitor"]) ?></p>
                      <!-- <p>Total = <?= $data[0]["L" . $i] + $data[0]["E" . $i] + $data[0]["V" . $i] ?></p> -->
                      <div class="stat">
                        <div class="values">
                          <p class="value-home"><strong><?= ucwords($matches["match" . $i]["home"]) ?>: <?= $data[0]["L" . $i] ?></strong></p>
                          <p class="value-draw"><strong>Empate: <?= $data[0]["E" . $i] ?></strong></p>
                          <p class="value-visitor"><strong><?= ucwords($matches["match" . $i]["visitor"]) ?>: <?= $data[0]["V" . $i] ?></strong></p>
                        </div>
                        <div class="graph home" title="<?= ucwords($matches["match" . $i]["home"]) . " " . round($data[0]["L" . $i] * 100 / 104, 2) ?>%" data-match="grupos<?= $i ?>" data-result="<?= $matches["match" . $i]["home"] ?>" style="height:<?= $data[0]["L" . $i] ?>%;"></div>
                        <div class="graph draw" title="Empate <?= round($data[0]["E" . $i] * 100 / 104, 2) ?>%" data-match="grupos<?= $i ?>" data-result="empate" style="height:<?= $data[0]["E" . $i] ?>%;"></div>
                        <div class="graph visitor" title="<?= ucwords($matches["match" . $i]["visitor"]) . " " . round($data[0]["V" . $i] * 100 / 104, 2) ?>%" data-match="grupos<?= $i ?>" data-result="<?= $matches["match" . $i]["visitor"] ?>" style="height:<?= $data[0]["V" . $i] ?>%;"></div>
                      </div>
                    </div>
                    </div>
                  <?php } ?>
                  </div>
                <?php } ?>
              </main>
          </div>
          <div id="info"></div>
          <script src="/js/scripts.js"></script>
          <!-- <script>
            // Envía los datos por POST con Ajax
            var graph = document.getElementsByClassName('graph');
            var info = document.getElementById('info');
            for (let i = 0; i < graph.length; i++) {
              graph[i].addEventListener('mouseover', function() {
                var match = graph[i].getAttribute('data-match');
                var result = graph[i].getAttribute('data-result');
                var parametros = "match=" + match + "&result=" + result;
                var url = "http://" + host + "/admin/tooltip.php";
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    // graph[i].title = this.response;
                    info.innerHTML = this.response;
                    info.style.top = 0;
                    info.style.left = 0;
                    info.style.position = 'fixed';
                    info.style.zIndex = 1;
                    info.style.backgroundColor = 'white';
                    info.style.padding = '.3em';
                    info.style.color = 'green';
                    info.style.fontSize = '.9em';
                  }
                };
                // Define como queremos realizar la comunicación
                xhttp.open("POST", url, true);
                // Pone las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Envía la solicitud junto con los parámetros
                xhttp.send(parametros);
              });
              graph[i].addEventListener('mouseout', function() {
                // info.innerHTML = '';
              });
            }
          </script> -->
          <script>
            var round1 = document.getElementById('round1');
            var round1Matchs = document.getElementsByClassName('round1-match');
            round1.addEventListener('click', function(e) {
              e.preventDefault();
              if (round2.classList.contains('round-active')) {
                round2.classList.remove('round-active')
              }
              if (round3.classList.contains('round-active')) {
                round3.classList.remove('round-active')
              }
              this.classList.toggle('round-active');
              for (let i = 0; i < round1Matchs.length; i++) {
                if (round1Matchs[i].style.display === "none") {
                  round1Matchs[i].style.display = "flex";
                  round2Matchs[i].style.display = "none";
                  round3Matchs[i].style.display = "none";
                }
              }
            });
            var round2 = document.getElementById('round2');
            var round2Matchs = document.getElementsByClassName('round2-match');
            round2.addEventListener('click', function(e) {
              e.preventDefault();
              if (round1.classList.contains('round-active')) {
                round1.classList.remove('round-active')
              }
              if (round3.classList.contains('round-active')) {
                round3.classList.remove('round-active')
              }
              this.classList.toggle('round-active');
              for (let i = 0; i < round2Matchs.length; i++) {
                if (round2Matchs[i].style.display === "none") {
                  round2Matchs[i].style.display = "flex";
                  round1Matchs[i].style.display = "none";
                  round3Matchs[i].style.display = "none";
                }
              }
            });
            var round3 = document.getElementById('round3');
            var round3Matchs = document.getElementsByClassName('round3-match');
            round3.addEventListener('click', function(e) {
              e.preventDefault();
              if (round1.classList.contains('round-active')) {
                round1.classList.remove('round-active')
              }
              if (round2.classList.contains('round-active')) {
                round2.classList.remove('round-active')
              }
              this.classList.toggle('round-active');
              for (let i = 0; i < round3Matchs.length; i++) {
                if (round3Matchs[i].style.display === "none") {
                  round3Matchs[i].style.display = "flex";
                  round1Matchs[i].style.display = "none";
                  round2Matchs[i].style.display = "none";
                }
              }
            });
          </script>
  </body>

  </html>
<?php
  // Archivo de desconexion a la base de datos
  require_once 'Classes/db_disconnection.php';
?>