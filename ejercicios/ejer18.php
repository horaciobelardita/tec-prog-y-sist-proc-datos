<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 18</title>
</head>
<body>
	<p>Informe de empleados</p>
	<?php 
		$archivo = fopen("ejer18.txt", "r");
		$total_empleados = 0;
		$total_mecanicos = 0;
		$total_admin = 0;
		$total_casados = 0;
		$total_sueldo = 0;
		while (! feof($archivo)) {
			$linea = fgets($archivo);

			$campos = explode(",", $linea);
			$total_empleados++;
			if ($campos[2] == 1) {
				$total_mecanicos++;
			}
			else {
				$total_admin++;
			}
			if ($campos[5] == 2) {
				$total_casados++;
			}
			$total_sueldo += $campos[3];
		}
		echo "Total empleados: " . $total_empleados . "<br>";
		echo "Total mecanicos: " . $total_mecanicos . "<br>";
		echo "Total administrativos: " . $total_admin . "<br>";
		echo "Total casados: " . $total_casados . "<br>";
		echo "Total sueldo a pagar: $" . $total_sueldo . "<br>";
	 ?>
</body>
</html>