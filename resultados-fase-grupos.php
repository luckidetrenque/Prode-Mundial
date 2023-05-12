<?php
    require_once 'Classes/db_connection.php';
    require_once 'Classes/functions.php';

    $today = date('d/m/Y',time()-18000);//+5 horas de diferencia

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
            <li><i class="fa-solid fa-futbol"></i><a href="/resultados-fase-grupos.php">Resultados</a></li>
          </ul>
        </header>
        <main class="main">
            <h2>Resultados de la Fase de Grupos</h2>
            <p id="day">Resultados de los partidos disputados hasta el día <strong><?= $today ?></strong>. <a href="/planilla-testigo-fase-grupos.php" title="Ver planilla testigo" target="_blank"><i class="fa-solid fa-magnifying-glass fa-more"></i>Ver planilla testigo</a></p>
            <p>Los 4 partidos jugados entre el Domingo 20 y el Lunes 21 de Noviembre, si bien están incluidos dentro de la planilla, se tomaran como Empate (E) ya que fueron jugados con anterioridad al vencimiento de presentación de la planilla.</p>
            <div id="groups-content" class="groups-content">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <table class="results group-table">
                <caption>GRUPO A</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td><input type="radio" name="grupos1" id="qatar1" value="qatar" disabled><label for="qatar1"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos1" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos1" id="ecuador1" value="ecuador" disabled><label for="ecuador1"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><input type="radio" name="grupos2" id="senegal2" value="senegal" disabled><label for="senegal2"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos2" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos2" id="paises-bajos2" value="paises bajos" disabled><label for="paises-bajos2"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><input type="radio" name="grupos3" id="qatar3" value="qatar" disabled><label for="qatar3"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos3" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos3" id="senegal3" value="senegal" disabled><label for="senegal3"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><input type="radio" name="grupos4" id="paises-bajos4" value="paises bajos" disabled><label for="paises-bajos4"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos4" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos4" id="ecuador4" value="ecuador" disabled><label for="ecuador4"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td><input type="radio" name="grupos5" id="ecuador5" value="ecuador" disabled><label for="ecuador5"><img src="/assets/images/flags/32/Ecuador.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos5" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos5" id="senegal5" value="senegal" disabled><label for="senegal5"><img src="/assets/images/flags/32/Senegal.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <td><input type="radio" name="grupos6" id="paises-bajos6" value="paises bajos" disabled><label for="paises-bajos6"><img src="/assets/images/flags/32/Netherlands.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos6" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos6" id="qatar6" value="qatar" disabled><label for="qatar6"><img src="/assets/images/flags/32/Qatar.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO B</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>7</td>
                    <td><input type="radio" name="grupos7" id="inglaterra7" value="inglaterra" disabled><label for="inglaterra7"><img src="/assets/images/flags/32/England.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos7" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos7" id="iran7" value="iran" disabled><label for="iran7"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>8</td>
                    <td><input type="radio" name="grupos8" id="estados-unidos8" value="estados unidos" disabled><label for="estados-unidos8"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos8" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos8" id="gales8" value="gales" disabled><label for="gales8"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>9</td>
                    <td><input type="radio" name="grupos9" id="gales9" value="gales" disabled><label for="gales9"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos9" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos9" id="iran9" value="iran" disabled><label for="iran9"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>10</td>
                    <td><input type="radio" name="grupos10" id="inglaterra10" value="inglaterra" disabled><label for="inglaterra10"><img src="/assets/images/flags/32/England.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos10" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos10" id="estados-unidos10" value="estados unidos" disabled><label for="estados-unidos10"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>11</td>
                    <td><input type="radio" name="grupos11" id="iran11" value="iran" disabled><label for="iran11"><img src="/assets/images/flags/32/Iran.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos11" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos11" id="estados-unidos11" value="estados unidos" disabled><label for="estados-unidos11"><img src="/assets/images/flags/32/United States.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>12</td>
                    <td><input type="radio" name="grupos12" id="gales12" value="gales" disabled><label for="gales12"><img src="/assets/images/flags/32/Wales.png" width="32px" heght="32px" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos12" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos12" id="inglaterra12" value="inglaterra" disabled><label for="inglaterra12"><img src="/assets/images/flags/32/England.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO C</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>13</td>
                    <td><input type="radio" name="grupos13" id="argentina13" value="argentina" disabled><label for="argentina13"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos13" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos13" id="arabia-saudita13" value="arabia saudita" disabled><label for="arabia-saudita13"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>14</td>
                    <td><input type="radio" name="grupos14" id="mexico14" value="mexico" disabled><label for="mexico14"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos14" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos14" id="polonia14" value="polonia" disabled><label for="polonia14"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>15</td>
                    <td><input type="radio" name="grupos15" id="polonia15" value="polonia" disabled><label for="polonia15"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos15" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos15" id="arabia-saudita15" value="arabia saudita" disabled><label for="arabia-saudita15"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>16</td>
                    <td><input type="radio" name="grupos16" id="argentina16" value="argentina" disabled><label for="argentina16"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos16" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos16" id="mexico16" value="mexico" disabled><label for="mexico16"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>17</td>
                    <td><input type="radio" name="grupos17" id="polonia17" value="polonia" disabled><label for="polonia17"><img src="/assets/images/flags/32/Poland.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos17" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos17" id="argentina17" value="argentina" disabled><label for="argentina17"><img src="/assets/images/flags/32/Argentina.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>18</td>
                    <td><input type="radio" name="grupos18" id="arabia-saudita18" value="arabia saudita" disabled><label for="arabia-saudita18"><img src="/assets/images/flags/32/Saudi Arabia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos18" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos18" id="mexico18" value="mexico" disabled><label for="mexico18"><img src="/assets/images/flags/32/Mexico.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO D</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>19</td>
                    <td><input type="radio" name="grupos19" id="dinamarca19" value="dinamarca" disabled><label for="dinamarca19"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos19" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos19" id="tunez19" value="tunez" disabled><label for="tunez19"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>20</td>
                    <td><input type="radio" name="grupos20" id="francia20" value="francia" disabled><label for="francia20"><img src="/assets/images/flags/32/France.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos20" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos20" id="australia20" value="australia" disabled><label for="australia20"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>21</td>
                    <td><input type="radio" name="grupos21" id="tunez21" value="tunez" disabled><label for="tunez21"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos21" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos21" id="australia21" value="australia" disabled><label for="australia21"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>22</td>
                    <td><input type="radio" name="grupos22" id="francia22" value="francia" disabled><label for="francia22"><img src="/assets/images/flags/32/France.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos22" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos22" id="dinamarca22" value="dinamarca" disabled><label for="dinamarca22"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>23</td>
                    <td><input type="radio" name="grupos23" id="tunez23" value="tunez" disabled><label for="tunez23"><img src="/assets/images/flags/32/Tunisia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos23" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos23" id="francia23" value="francia" disabled><label for="francia23"><img src="/assets/images/flags/32/France.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>24</td>
                    <td><input type="radio" name="grupos24" id="australia24" value="australia" disabled><label for="australia24"><img src="/assets/images/flags/32/Australia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos24" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos24" id="dinamarca24" value="dinamarca" disabled><label for="dinamarca24"><img src="/assets/images/flags/32/Denmark.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO E</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>25</td>
                    <td><input type="radio" name="grupos25" id="alemania25" value="alemania" disabled><label for="alemania25"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos25" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos25" id="japon25" value="japon" disabled><label for="japon25"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>26</td>
                    <td><input type="radio" name="grupos26" id="españa26" value="españa" disabled><label for="españa26"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos26" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos26" id="costa-rica26" value="costa rica" disabled><label for="costa-rica26"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>27</td>
                    <td><input type="radio" name="grupos27" id="japon27" value="japon" disabled><label for="japon27"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos27" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td>
                        <input type="radio" name="grupos27" id="costa-rica27" value="costa rica" disabled>
                        <label for="costa-rica27">
                        <img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag">
                    </td>
                    </tr>
                    <tr>
                    <td>28</td>
                    <td><input type="radio" name="grupos28" id="españa28" value="españa" disabled><label for="españa28"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos28" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos28" id="alemania28" value="alemania" disabled><label for="alemania28"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>29</td>
                    <td><input type="radio" name="grupos29" id="japon29" value="japon" disabled><label for="japon29"><img src="/assets/images/flags/32/Japan.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos29" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos29" id="españa29" value="españa" disabled><label for="españa29"><img src="/assets/images/flags/32/Spain.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>30</td>
                    <td><input type="radio" name="grupos30" id="costa-rica30" value="costa rica" disabled><label for="costa-rica30"><img src="/assets/images/flags/32/Costa Rica.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos30" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos30" id="alemania30" value="alemania" disabled><label for="alemania30"><img src="/assets/images/flags/32/Germany.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO F</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>31</td>
                    <td><input type="radio" name="grupos31" id="marruecos31" value="marruecos" disabled><label for="marruecos31"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos31" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos31" id="croacia31" value="croacia" disabled><label for="croacia31"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>32</td>
                    <td><input type="radio" name="grupos32" id="belgica32" value="belgica" disabled><label for="belgica32"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos32" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos32" id="canada32" value="canada" disabled><label for="canada32"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>33</td>
                    <td><input type="radio" name="grupos33" id="belgica33" value="belgica" disabled><label for="belgica33"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos33" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos33" id="marruecos33" value="marruecos" disabled><label for="marruecos33"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>34</td>
                    <td><input type="radio" name="grupos34" id="croacia34" value="croacia" disabled><label for="croacia34"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos34" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos34" id="canada34" value="canada" disabled><label for="canada34"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>35</td>
                    <td><input type="radio" name="grupos35" id="croacia35" value="croacia" disabled><label for="croacia35"><img src="/assets/images/flags/32/Croatia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos35" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos35" id="belgica35" value="belgica" disabled><label for="belgica35"><img src="/assets/images/flags/32/Belgium.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>36</td>
                    <td><input type="radio" name="grupos36" id="canada36" value="canada" disabled><label for="canada36"><img src="/assets/images/flags/32/Canada.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos36" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos36" id="marruecos36" value="marruecos" disabled><label for="marruecos36"><img src="/assets/images/flags/32/Morocco.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO G</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>37</td>
                    <td><input type="radio" name="grupos37" id="suiza37" value="suiza" disabled><label for="suiza37"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos37" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos37" id="camerun37" value="camerun" disabled><label for="camerun37"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>38</td>
                    <td><input type="radio" name="grupos38" id="brasil38" value="brasil" disabled><label for="brasil38"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos38" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos38" id="serbia38" value="serbia" disabled><label for="serbia38"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>39</td>
                    <td><input type="radio" name="grupos39" id="camerun39" value="camerun" disabled><label for="camerun39"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos39" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos39" id="serbia39" value="serbia" disabled><label for="serbia39"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>40</td>
                    <td><input type="radio" name="grupos40" id="brasil40" value="brasil" disabled><label for="brasil40"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos40" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos40" id="suiza40" value="suiza" disabled><label for="suiza40"><img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>41</td>
                    <td><input type="radio" name="grupos41" id="serbia41" value="serbia" disabled><label for="serbia41"><img src="/assets/images/flags/32/Serbia.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos41" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td>
                        <input type="radio" name="grupos41" id="suiza41" value="suiza" disabled>
                        <label for="suiza41">
                        <img src="/assets/images/flags/32/Switzerland.png" alt="" class="flag">
                    </td>
                    </tr>
                    <tr>
                    <td>42</td>
                    <td><input type="radio" name="grupos42" id="camerun42" value="camerun" disabled><label for="camerun42"><img src="/assets/images/flags/32/Cameroon.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos42" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos42" id="brasil42" value="brasil" disabled><label for="brasil42"><img src="/assets/images/flags/32/Brazil.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
                <table class="results group-table">
                <caption>GRUPO H</caption>
                <thead>
                    <tr>
                    <th></th>
                    <th>EQUIPO (L)</th>
                    <th>EMPATE (E)</th>
                    <th>EQUIPO (V)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>43</td>
                    <td><input type="radio" name="grupos43" id="uruguay43" value="uruguay" disabled><label for="uruguay43"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos43" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos43" id="corea-del-sur43" value="corea del sur" disabled><label for="corea-del-sur43"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>44</td>
                    <td><input type="radio" name="grupos44" id="portugal44" value="portugal" disabled><label for="portugal44"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos44" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos44" id="ghana44" value="ghana" disabled><label for="ghana44"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>45</td>
                    <td><input type="radio" name="grupos45" id="corea-del-sur45" value="corea del sur" disabled><label for="corea-del-sur45"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos45" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos45" id="ghana45" value="ghana" disabled><label for="ghana45"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>46</td>
                    <td><input type="radio" name="grupos46" id="portugal46" value="portugal" disabled><label for="portugal46"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos46" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos46" id="uruguay46" value="uruguay" disabled><label for="uruguay46"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>47</td>
                    <td><input type="radio" name="grupos47" id="corea-del-sur47" value="corea del sur" disabled><label for="corea-del-sur47"><img src="/assets/images/flags/32/South Korea.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos47" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos47" id="portugal47" value="portugal" disabled><label for="portugal47"><img src="/assets/images/flags/32/Portugal.png" alt="" class="flag"></label></td>
                    </tr>
                    <tr>
                    <td>48</td>
                    <td><input type="radio" name="grupos48" id="ghana48" value="ghana" disabled><label for="ghana48"><img src="/assets/images/flags/32/Ghana.png" alt="" class="flag"></label></td>
                    <td><input type="radio" name="grupos48" id="empate" value="empate" disabled><label for="empate"><img src="/assets/images/empate.png" alt="" class="flag img-draw"></label></td>
                    <td><input type="radio" name="grupos48" id="uruguay48" value="uruguay" disabled><label for="uruguay48"><img src="/assets/images/flags/32/Uruguay.png" alt="" class="flag"></label></td>
                    </tr>
                </tbody>
                </table>
            </form>
              </div>
          </main>
      </div>
      <script src="/js/scripts.js"></script>
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
                    //   partido[x].parentElement.parentElement.style.backgroundColor = '#6cc1d4';
                  }
              }
          }
      }
    </script>
  </body>
</html>
<?php
// Archivo de desconexion a la base de datos
require_once 'Classes/db_disconnection.php';
?>