<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>Ejercicio 21</title>
</head>
<body>
<p>Informe de Articulos</p>
<table>
    <?php
    $archivo = fopen("ejer21.txt", "r");
    $articulos = array();
    while (! feof($archivo)) {
        $linea = fgets($archivo);
        $campos = explode(",", $linea);
        array_push($articulos, [
            'id' => $campos[0],
            'desc' => $campos[1],
            'total' => $campos[3] - $campos[4],
            'entrada' => $campos[3],
            'salida'  => $campos[4]
        ]);
    }
    fclose($archivo);
    ?>

    <?php
    foreach (array_chunk($articulos, 2) as $renglones) {
        echo "<table><tr><th>ID</th><th>Descripcion</th><th>Entrada</th><th>Salida</th><th>Total</th></tr>";
        echo "<tbody>";
        foreach ($renglones as $art) {
            echo "<tr>";
            echo "<td>" . $art["id"] . "</td>";
            echo "<td>" . $art["desc"] . "</td>";
            echo "<td>" . $art["entrada"] . "</td>";
            echo "<td>" . $art["salida"] . "</td>";
            echo "<td>" . $art["total"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    }
    ?>

</body>
</html>