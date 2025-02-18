<?php
/**
 * Simon (4) - simon-4-2.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2021 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2021-11-30
 * @link      https://www.mclibre.org
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
// Se accede a la sesión
session_name("simon-4");
session_start();

if (!isset($_SESSION["longitud"]) || !isset($_SESSION["objetivo"]) || !isset($_SESSION["jugador"]) || !isset($_SESSION["fallo"]) || !isset($_SESSION["completado"])) {
    header("Location:simon-4-1.php");
    exit;
}

function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$eleccion = recoge("eleccion");

if ($eleccion == "Reiniciar") {
    header("Location:simon-4-1.php");
    exit;
}

if ($_SESSION["completado"] || $_SESSION["fallo"]) {
    header("Location:simon-4-2.php");
    exit;
}

if (in_array($eleccion, ["red", "yellow", "green", "blue"])) {
    $_SESSION["jugador"][] = $eleccion;
    $_SESSION["fallo"] = false;
    for ($i = 0; $i < count($_SESSION["jugador"]); $i++) {
        if ($_SESSION["jugador"][$i] != $_SESSION["objetivo"][$i]) {
            $_SESSION["fallo"] = true;
        }
    }
    if (!$_SESSION["fallo"] && count($_SESSION["jugador"]) == count($_SESSION["objetivo"])) {
        $_SESSION["completado"] = true;
    }
}

header("Location:simon-4-2.php");
