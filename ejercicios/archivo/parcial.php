<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parcial</title>
	<style>
		 table, th, td {
   			 border: 1px solid black;
   			 text-align:  center;
		}
	</style>
</head>
<body>
	<?php 
		function leer(&$arch, &$reg) {
			if (feof($arch)) {
				return true;
			} else {
				$reg = fgets($arch);
				return false;
			}
		}
		$empleados = [];
		$reg = "";
		$total_mecanicos = 0;
		$total_sueldo_mecanico = 0;
		$cant_admin = 0;
		$arch = fopen("parcial.txt", "r");
		$fin = leer($arch, $reg);
		$primer_reg = explode(",", $reg);
		$primer_sueldo = $primer_reg[3] + $primer_reg[5] - $primer_reg[4];
		$mayor_sueldo = $primer_sueldo;
		$mayor_sueldo_nya = $primer_reg[1];
		$menor_sueldo = $primer_sueldo;
		$menor_sueldo_nya = $primer_reg[1];
		while (! $fin ) {
			$campos = explode(",", $reg);
			$empleado = array(
				"cod" => $campos[0],
				"nya" => $campos[1],
				"sueldo" => $campos[3],
				"asignacion" => $campos[5],
				"retencion" => $campos[4],
				"total" => $campos[3] + $campos[5] - $campos[4]
			);
			array_push($empleados, $empleado);
			// el mayor sueldo
			if ($empleado["total"] > $mayor_sueldo) {
				$mayor_sueldo_nya = $empleado["nya"];
				$mayor_sueldo = $empleado["total"];
			} 
			// el menor sueldo
			if ($empleado["total"] < $menor_sueldo) {
				$menor_sueldo_nya = $empleado["nya"];
				$menor_sueldo = $empleado["total"];
			}
			//  si es mecanico
			if ($campos[2] == 2) {
				$total_mecanicos++;
				$total_sueldo_mecanico += $campos[3];
			}
			// cant administrativo mayor asignacion a 5000
			if ($campos[2] == 3 && $campos[5] > 5000) {
				$cant_admin++;
			}
			$fin = leer($arch, $reg);
		}
		
	 ?>
	 <h2>Resumen de Pagos</h2>
	 <table>
	 	<thead>
	 		<tr>
	 			<th>Cod.</th>
	 			<th>Nombre</th>
	 			<th>Sueldo</th>
	 			<th>Asignacion</th>
	 			<th>Retencion</th>
	 			<th>Total a pagar</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php 
	 			foreach ($empleados as $emp) {
	 				echo "<tr>";
	 				echo "<td>" . $emp["cod"] . "</td>";
	 				echo "<td>" . $emp["nya"] . "</td>";
	 				echo "<td>" . $emp["sueldo"] . "</td>";
	 				echo "<td>" . $emp["asignacion"] . "</td>";
	 				echo "<td>" . $emp["retencion"] . "</td>";
	 				echo "<td>" . $emp["total"] . "</td>";
	 				echo "</tr>";
	 			}
	 		 ?>
	 	</tbody>
	 </table>
	 <p>El mayor sueldo se llama <?php  echo $mayor_sueldo_nya; ?> con sueldo de $ <?php echo $mayor_sueldo; ?></p>
	 <p>El menor sueldo se llama <?php echo $menor_sueldo_nya; ?> con sueldo de $ <?php echo $menor_sueldo; ?></p>
	 <p>Cantidad de mecanicos <?php echo $total_mecanicos; ?></p>
	 <p>Total sueldo mecanico $<?php echo $total_sueldo_mecanico; ?></p>
	 <p>Cantidad de administrativos con asignacion mayor a 5000 =  <?php echo $cant_admin; ?></p>
</body>
</html>