<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>
    Convertidor de distancias (3) JSON-RPC (Formulario).
    Funciones (1). Funciones.
    Ejercicios. Programación web en PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color" />
</head>

<body>
  <h1>Convertidor de distancias (Formulario)</h1>

  <form action="funciones-1-3-rpc-2.php" method="get">
    <p>
      Quiero convertir:
      <input type="number" name="numero" size="40" />
      <select name="inicial">
        <option value="km">km</option>
        <option value="m">m</option>
        <option value="cm">cm</option>
      </select>
      a
      <select name="final">
        <option value="km">km</option>
        <option value="m" selected="selected">m</option>
        <option value="cm">cm</option>
      </select>
    </p>

    <p>
      <input type="submit" value="Convertir" />
      <input type="reset" value="Borrar" />
    </p>
  </form>

  <footer>
  <p class="ultmod">
    Última modificación de esta página:
    <time datetime="2018-12-09">9 de diciembre de 2018</time>
  </p>

  <p class="licencia">
    Este programa forma parte del curso <a href="http://www.mclibre.org/consultar/php/">
    Programación web en PHP</a> por <a href="http://www.mclibre.org/">Bartolomé
    Sintes Marco</a>.<br />
    El programa PHP que genera esta página está bajo
    <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.</p>
</footer>
</body>
</html>
