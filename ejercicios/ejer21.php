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
    $total_entrada = 0;
    $total_salida = 0;
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
        $total_entrada += $campos[3];
        $total_salida += $campos[4];
    }
    fclose($archivo);
    ?>

    <?php
    // en el ejercicio pide cada 70 renglones seria reemplazar array_chunk($array, 70)
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
    echo "Total de entrada: " . $total_entrada;
    echo "Total salida: " . $total_salida;
    ?>

</body>
</html>