<?php
/**
 * Sucesiones aritméticas 3 (Resultado) - for_4_3_2.php
*
* @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
* @copyright 2016 Bartolomé Sintes Marco
* @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
* @version   2016-11-06
* @link      http://www.mclibre.org
*
*  This program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  any later version.
*
*  This program is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Sucesiones aritméticas 3 (Resultado). for (4).
      Ejercicios. PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Sucesiones aritméticas 3 (Resultado)</h1>

<?php
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
        ? trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"))
        : "";
    return $tmp;
}

$inicial = recoge("inicial");
$final   = recoge("final");
$valores = recoge("valores");

$inicialOk = $finalOk = $valoresOk = false;

    // Comprobación habitual de los valores recibidos
if ($inicial == "") {
    print "    <p class=\"aviso\">No ha escrito el valor inicial.</p>\n\n";
} elseif (! is_numeric($inicial)) {
    print "    <p class=\"aviso\">No ha escrito el valor inicial como número.</p>\n\n";
} else {
    $inicialOk = true;
}

if ($final == "") {
    print "    <p class=\"aviso\">No ha escrito el valor final.</p>\n\n";
} elseif (! is_numeric($final)) {
    print "    <p class=\"aviso\">No ha escrito el valor final como número.</p>\n\n";
} else {
    $finalOk = true;
}

if ($valores == "") {
    print "    <p class=\"aviso\">No ha escrito el número de valores.</p>\n\n";
} elseif (! is_numeric($valores)) {
    print "    <p class=\"aviso\">No ha escrito el número de valores como número.</p>\n\n";
} elseif (! ctype_digit($valores)) {
    print "    <p class=\"aviso\">No ha escrito el número de valores "
        . "como número entero positivo.</p>\n\n";
} elseif ($valores < 2) {
    print "    <p class=\"aviso\">Como mínimo debe solicitar dos valores. </p>\n\n";
} else {
    $valoresOk = true;
}

if ($inicialOk && $finalOk && $valoresOk) {
    $incremento = ($final - $inicial) / ($valores - 1);

    print "    <p>Datos:</p>\n";
    print "\n";
    print "    <ul>\n";
    print "      <li>Valor inicial: $inicial</li>\n";
    print "      <li>Valor final: $final</li>\n";
    print "      <li>Incremento: $incremento</li>\n";
    print "      <li>Número de términos: $valores</li>\n";
    print "    </ul>\n";
    print "\n";

    print "    <p>Términos de la sucesión:</p>\n";
    print "\n";
    print "    <ol>\n";
    for ($i = 0; $i < $valores; $i ++) {
        print "      <li>" . ($inicial + $incremento * $i) . "</li>\n";
    }
    print "    </ol>\n";
    print "\n";
}

?>
    <p><a href="for_4_3_1.php">Volver al formulario.</a></p>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-11-06">6 de noviembre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>