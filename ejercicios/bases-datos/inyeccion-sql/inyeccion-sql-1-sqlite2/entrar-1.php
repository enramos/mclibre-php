<?php
/**
 * Inyección SQL 1 - entrar-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2011 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2011-05-18
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

include('biblioteca.php');
$db = conectaDb();

$consulta = "SELECT COUNT(*) FROM $dbTabla";
$result = sqlite_array_query($db, $consulta);
if (!$result) {
    cabecera('Añadir 1', MENU_VOLVER, CABECERA_SIN_CURSOR);
    print "    <p>Error en la consulta.</p>\n";
    print "\n";
} elseif ($result[0][0] >= MAX_REG_TABLA) {
    cabecera('Añadir 1', MENU_VOLVER, CABECERA_SIN_CURSOR);
    print "    <p>Se ha alcanzado el número máximo de registros que se pueden guardar.</p>\n";
    print "\n";
    print "    <p>Por favor, borre algún registro antes.</p>\n";
    print "\n";
} else {
    cabecera('Entrar 1', MENU_VOLVER, CABECERA_CON_CURSOR);
    print "    <form action=\"entrar-2.php\" method=\"" . FORM_METHOD . "\">\n";
    print "      <p>Para entrar en el sistema escriba su nombre de usuario y contraseña:</p>\n";
    print "\n";
    print "      <table>\n";
    print "        <tbody>\n";
    print "          <tr>\n";
    print "            <td>Usuario:</td>\n";
    print "            <td><input type=\"text\" name=\"usuario\" size=\"$tamUsuario\" "
    . "maxlength=\"$tamUsuario\" id=\"cursor\" /></td>\n";
    print "          </tr>\n";
    print "          <tr>\n";
    print "            <td>Contraseña:</td>\n";
    print "            <td><input type=\"text\" name=\"contraseña\" size=\"$tamContraseña\" "
    . "maxlength=\"$tamContraseña\" /></td>\n";
    print "          </tr>\n";
    print "        </tbody>\n";
    print "      </table>\n";
    print "\n";
    print "      <p><input type=\"submit\" value=\"Entrar\" /></p>\n";
    print "    </form>\n";
    print "\n";
}

$db = null;
pie();
?>
