﻿<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ejemplo de recogida de datos sin comprobación (Formulario). Ejemplo de ejercicio.
      Ejercicios. Programación web en PHP. Bartolomé Sintes Marco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="mclibre_php_soluciones.css" rel="stylesheet" type="text/css" title="Color" />
  </head>

  <body>
    <h1>Ejemplo de recogida de datos sin comprobación (Formulario)</h1>

    <form action="ejemplo_recogida_datos_1-2.php" method="get">
      <table>
        <tbody>
          <tr>
            <td>Escriba su nombre:</td>
            <td><input type="text" name="nombre" size="30" maxlength="20" /> </td>
          </tr>
          <tr>
            <td>Escriba su edad:</td>
            <td><input type="number" name="edad" min="1" max="120" /> años</td>
          </tr>
        </tbody>
      </table>

      <p>
        <input type="submit" value="Enviar" />
        <input type="reset" value="Borrar" />
      </p>
    </form>

    <footer>
      <p class="ultmod">
        Última modificación de esta página:
        <time datetime="2016-10-26">26 de octubre de 2016</time></p>

      <p class="licencia">
        Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
        Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
        Sintes Marco</a>.<br />
        El programa PHP que genera esta página está bajo
        <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
    </footer>
  </body>
</html>
