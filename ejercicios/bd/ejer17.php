<?php

$dbopts = parse_url(getenv('DATABASE_URL'));

$conn = new PDO('pgsql:host=' . $dbopts['host'] .';port=' . $dbopts['port'] .  ';dbname=' . ltrim($dbopts["path"],'/'), $dbopts['user'], $dbopts['pass']);

$sql = "Select * from ejer17";

$cmd = $conn->prepare($sql);

$cmd->execute();

$articulos = $cmd->fetchAll();

$total_entrada = 0;
$total_salida = 0;
$total_diferencia = 0;

$conn = null;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 17</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>informe de operaciones con  mercaderia</h2>
    <table>
        <thead>
            <tr>
                <th>Cod. Art</th>
                <th>Desc.</th>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Diferencia</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($articulos as $articulo) {
                    echo "<tr>";
                    echo "<td>" . $articulo['id'] . "</td>";
                    echo "<td>" . $articulo['descripcion'] . "</td>";
                    echo "<td>" . $articulo['entrada'] . "</td>";
                    echo "<td>" . $articulo['salida'] . "</td>";
                    $diferencia = $articulo['entrada'] - $articulo['salida'];
                    echo "<td>" . $diferencia . "</td>";
                    echo "</tr>";

                    $total_entrada += $articulo['entrada'];
                    $total_salida += $articulo['salida'];
                    $total_diferencia += $diferencia;
                }
            ?>
            <tr>
                <td>Totales</td>
                <td></td>
                <td><?= $total_entrada ?></td>
                <td><?= $total_salida ?></td>
                <td><?= $total_diferencia ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>



