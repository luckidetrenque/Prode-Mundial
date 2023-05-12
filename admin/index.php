<?php
session_start();
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
    <?php
    if (!isset($_SESSION["autentificado"]) || ($_SESSION["autentificado"]<>"SI")) {
    ?>
        <header class="header">
            <div class="header__up">
                <img class="logo" src="../assets/images/upj_logo.png"
                    alt="Unión Personal Jerárquico del Banco de la Provincia de Buenos Aires">
                <h1 class="main__title">PRODE MUNDIAL<span>QATAR 2022</span></h1>
            </div>
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house"></i><a href="/">Principal</a></li>
                <li><i class="fa-solid fa-lock"></i><a href="/admin/index.php">Administración</a></li>
            </ul>
        </header>
        <main class="main">
            <h2>Ingreso de Administradores</h2>
            <p>Esta sección es exclusiva paralos administradores del sitio.</p>
            <div class="main-item data">
                <form action="login-admin.php" method="post">
                    <p>
                    <label for="username">USUARIO:</label>
                    <input type="text" name="username" id="username" value="" required  class="login" style="background-color: transparent;">
                    </p>
                    <p>
                    <label for="password">PASSWORD:</label>
                    <input type="password" name="password" id="password" value="" required  class="login" style="background-color: transparent;">
                    </p>
                    <input type="hidden" name="urlback" value="<?= $_SERVER['REQUEST_URI'] ?>"> <!-- Guarda la url de la pagina para redireccionar despues del login -->
                    <input type="submit" id="login-admin" name="login-admin" value="Ingresar">
                </form>
            </div>
        </main>
    <?php
    } else { ?>
        <header class="header">
            <div class="header__up">
                <img class="logo" src="../assets/images/upj_logo.png"
                    alt="Unión Personal Jerárquico del Banco de la Provincia de Buenos Aires">
                <h1 class="main__title">PRODE MUNDIAL<span>QATAR 2022</span></h1>
            </div>
            <ul class="breadcrumb">
                <li><i class="fa-solid fa-house"></i><a href="/">Principal</a></li>
                <li><i class="fa-solid fa-lock"></i><a href="/admin/index.php">Administración (@<?= $_SESSION["username"] ?>)</a></li>
            </ul>
        </header>
        <main class="main">
            <h2>Módulo de Administración</h2>
            <div class="main-item">
                <ul class="menu">
                <li class="menu__li"><i class="fa-solid fa-3x fa-circle-check"></i><a class="menu__a"
                        href="/admin/confirmar-planillas-fase-grupos.php">Confirmar Planillas</a>
                </li>
                <li class="menu__li"><i class="fa-solid fa-3x fa-database"></i><a class="menu__a"
                        href="/admin/cargar-resultados-fase-grupos.php">Cargar Resultados</a>
                </li>
                <li class="menu__li"><i class="fa-solid fa-3x fa-right-from-bracket"></i><a class="menu__a"
                        href="/admin/logout-admin.php">Salir</a>
    </li>
            </ul>
            </div>
        <?php } ?>
        </ma>
    <script src="../js/scripts.js"></script>
</body>
</html>