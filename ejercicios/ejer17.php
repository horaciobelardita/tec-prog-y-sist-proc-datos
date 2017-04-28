<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		table, th, td {
		   border: 1px solid black;
		}
	</style>
	<title>Ejercicio 17</title>
</head>
<body>
	<p>Informe de operaciones con mercaderia</p>
	 <table>
	 	<thead>
	 		<tr>
	 			<th>Cod. Art</th>
	 			<th>Desc. Art</th>
	 			<th>Entrada</th>
	 			<th>Salida</th>
	 			<th>Diferencia</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 	<?php 
			$archivo = fopen("ejer17.txt", "r");
			$articulos = array();
	 		$linea = fgets($archivo);
	 		while (! feof($archivo)) {
	 			$campos = explode(",", $linea);
				array_push($articulos, array(
					'cod' => $campos[0],
					'desc' => $campos[1],
					'entrada' => $campos[2],
					'salida' => $campos[3],
					'diferencia'  => $campos[2] - $campos[3]
					));
				$linea = fgets($archivo);
			}
			fclose($archivo);
	 	?>
	 	
	 	<?php 
	 		foreach ($articulos as $a) {
	 			echo "<tr>";
	 			echo "<td>" . $a["cod"] . "</td>";
	 			echo "<td>" . $a["desc"] . "</td>";
	 			echo "<td>" . $a["entrada"] . "</td>";
	 			echo "<td>" . $a["salida"] . "</td>";
	 			echo "<td>" . $a["diferencia"] . "</td>";
	 			echo "</tr>";
	 		}
	 	 ?>
	 	</tbody>

	 </table>
</body>
</html>