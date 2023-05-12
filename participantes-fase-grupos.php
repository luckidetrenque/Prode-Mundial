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
      <title>Prode Mundial Catar 2022 - Administración</title>
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
          <li><i class="fa-solid fa-user-group"></i><a href="/participantes-fase-grupos.php">Participantes</a></li>
        </ul>
      </header>
      <main class="main">
      <?php
        $sql = "SELECT SQL_CACHE participantes_fase_grupos.* FROM participantes_fase_grupos WHERE confirmada = 1";
        $data = selectData($conexion, $sql);
        if (empty($data)) {
          ?>
          <p class="warning">No hay planillas confirmadas en la base de datos.</p>
        <?php
        } else {
        ?>
          <h2>Participantes confirmados</h2>
            <table class="participants">
            <!-- <table class="worksheets"> -->
              <caption><strong>Total de planillas confirmadas al día 21/11/2022: <?= count($data) ?></strong></caption>
              <thead>
                <tr>
                  <th>Nombre y Apellido</th>
                  <th>Afiliado N°</th>
                  <th>Planilla N°</th>
                </tr>
              </thead>
              <tbody>
              <?php for ($i = 0, $size = count($data); $i < $size; ++$i) { ?>
                <tr>
                <!-- <tr class="worksheet"> -->
                  <td><?= $data[$i]["nombre"] ?> <?= $data[$i]["apellido"] ?></td>
                  <td><?= $data[$i]["afiliado"] ?></td>
                  <td><?= $data[$i]["codigo"] ?><a href="ver-planilla-fase-grupos.php?planilla=<?= $data[$i]["codigo"] ?>" title="Ver planilla" target="_blank"><i class="fa-solid fa-magnifying-glass fa-more"></i></a><a class="planilla__link" href="descargar-planilla-fase-grupos.php?planilla=<?= $data[$i]["codigo"] ?>" title="Descargar planilla"><i class="fa-solid fa-download"></i></a></td>
                </tr>
              <?php }?>
              </tbody>
            </table>
        <?php }?>
      </main>
    </div>
    <script src="/js/scripts.js"></script>
  </body>

  </html>
<?php
  // Archivo de desconexion a la base de datos
  require_once 'Classes/db_disconnection.php';
?>