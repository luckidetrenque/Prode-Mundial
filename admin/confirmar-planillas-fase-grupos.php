<?php
session_start();
if (!isset($_SESSION["autentificado"]) || ($_SESSION["autentificado"] <> "SI")) {
  header("Location:http://" . $_SERVER['HTTP_HOST'] . "/admin/");
} else {
  require_once '../Classes/db_connection.php';
  require_once '../Classes/functions.php';
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
          <li><i class="fa-solid fa-circle-check"></i><a href="/admin/confirmar-planillas-fase-grupos.php">Confirmar Planillas</a></li>
        </ul>
      </header>
      <main class="main">        
      <?php
        $sql = "SELECT SQL_CACHE participantes_fase_grupos.* FROM participantes_fase_grupos WHERE confirmada = 0";
        $data = selectData($conexion, $sql);
        if (empty($data)) {
          ?>
          <p class="warning">No hay planillas en la base de datos para confirmar.</p>
        <?php
        } else {
          if (isset($_POST["confirm"])) {
            if (!empty($_POST["paids"])) {
              $paids =  $_POST["paids"];
              $sql = "";
              foreach ($paids as $key => $value) {
                $sql = "UPDATE participantes_fase_grupos SET confirmada = 1 WHERE codigo = " . $value . ";";
                updateData($conexion,$sql);
              }
            }} else {
              ?>
          <h2>Confirmar planillas</h2>
          <p>Hay un total de <strong><?= count($data) ?></strong> planillas sin confirmar.</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="worksheets">
              <?php for ($i = 0, $size = count($data); $i < $size; ++$i) { ?>
                <div class="worksheet">
                  <h3>Afiliado N° <?= $data[$i]["afiliado"] ?></h3>
                  <p><?= $data[$i]["nombre"] ?> <?= $data[$i]["apellido"] ?></p>
                  <p>Planilla N° <?= $data[$i]["codigo"] ?></p>
                    <p>
                      <input type="checkbox" id="paid" name="paids[]" value="<?= $data[$i]["codigo"] ?>">
                      <label for="paid"> Válida</label>
                    </p>
                </div>
              <?php }?>
            </div>
            <div class="main-item data">
              <input type="submit" value="Confirmar" id="confirm" name="confirm">
            </div>
          </form>
        <?php }}?>
      </main>
    </div>
    <script src="../js/scripts.js"></script>
  </body>

</html>
<?php
  // Archivo de desconexion a la base de datos
  require_once '../Classes/db_disconnection.php';
}
?>