<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 19</title>
	<style>
		table, td, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<p>Padron de empleados</p>
	<?php 
		$archivo = fopen("ejer19.txt", "r");
		$total_sueldo = 0;
		$total_sueldo_mecanico = 0;
		$nro_empleados = 0;
		$total_mec = 0;
		$empleados = array();
		while (! feof($archivo)) {
			$linea = fgets($archivo);
			$campos = explode(",", $linea);
			$empleado = array(
				"cod" => $campos[0],
				"nombre" => $campos[1],
				"sueldo"  => $campos[2],
				"obser" => ($campos[3] == 1 ? "Mecanico" : "Conductor")
			); 
			array_push($empleados, $empleado);
			$total_sueldo += $campos[2];
			$nro_empleados++;
			if ($campos[3] == 1) {
				$total_mec++;
				$total_sueldo_mecanico += $campos[2];
			}
		}
		fclose($archivo);

	?>
	<table>
		<thead>
			<th>Cod. Empleado</th>
			<th>Nombre</th>
			<th>Sueldo</th>
			<th>Categoria</th>
		</thead>
		<tbody>
			<?php 
				foreach ($empleados as $emp) {
					echo "<tr>";
					echo "<td>" . $emp['cod'] . "</td>";
					echo "<td>" . $emp['nombre'] . "</td>";
					echo "<td>" . $emp['sueldo'] . "</td>";
					echo "<td>" . $emp['obser'] . "</td>";
					echo "</tr>";
				}
			 ?>
			 <tr>
			 	<td></td>
			 	<td>Total</td>
			 	<td><?php echo $total_sueldo ?></td>
			 </tr>
		</tbody>
	</table>
	<p>Promedio Sueldo: $<?php echo $total_sueldo / $nro_empleados  ?></p>
	<p>Promedio sueldo mecanico: $<?php echo $total_sueldo_mecanico / $total_mec ?></p>
</body>
</html>