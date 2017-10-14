﻿<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Colores 2 (Formulario). Controles en formularios (1).
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre-php-soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Colores 2 (Formulario)</h1>

    <form action="controles-formularios-1-7-2.php" method="get">
      <p>Elija los colores a cambiar:<br />
<?php
$color = rand(0, 360);
print "    <label><input type=\"checkbox\" name=\"fondo\" value=\"hsl($color, 100%, 90%)\" /> Color del fondo de la página</label><br />\n";
print "    <label><input type=\"checkbox\" name=\"letra\" value=\"hsl($color, 100%, 30%)\" /> Color de la letra de la página</label>\n";
?>
      </p>

      <p>
        <input type="submit" value="Enviar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-10-24">24 de octubre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>
