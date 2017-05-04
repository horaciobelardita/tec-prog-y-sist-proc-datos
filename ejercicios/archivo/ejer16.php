<?php 
	$archivo = fopen("ejer15.txt", "r");
	$cant_varones = 0;
	$cant_muj_20_30 = 0;
	$cant_muj_casadas_30_40 = 0;
	$cant_muj_casadas = 0;
	$cant_varones_solt_25 = 0;
	$cant_varones_casados = 0;
	while (! feof($archivo)) {
		$linea = fgets($archivo);
		$campos = explode(",", $linea);
		// si es varon
		if ($campos[1] == 1)
		{
			// si es varon casado
			if ($campos[2] == 2) {
				$cant_varones_casados += 1;
				// varones solteros y edad igual a 25
			} 
			if ($campos[2] == 1 && $campos[0] == 25) {
				$cant_varones_solt_25 += 1;
			}
			$cant_varones += 1;
		}
		else {	
			// mujeres casadas
			if ($campos[2] == 2) {
				$cant_muj_casadas += 1;
			}
			// mujeres entre 20 y 30 años
			if ($campos[0] >= 20 && $campos[0] <= 30)
			{
				$cant_muj_20_30 += 1;
			}
			// mujeres casadas entre 30 y 40 años
			if ($campos[2] == 2 && $campos[0] >= 30 && $campos[0] <= 40) {
				$cant_muj_casadas_30_40 += 1;
			}

		}
	}
	fclose($archivo);
	echo "Cantidad de varones: " . $cant_varones . "<br>";
	echo "Cantidad de mujeres entre 20 y 30 años: " . $cant_muj_20_30 . "<br>";
	echo "Cantidad de mujeres casadas entre 30 y 40 años: " . $cant_muj_casadas_30_40 . "<br>";
	echo "Cantidad de mujeres casadas: " . $cant_muj_casadas . "<br>";
	echo "Cantidad de varones solteros: " . $cant_varones_solt_25 . "<br>";
	echo "Cantidad de varones casados:" . $cant_varones_casados . "<br>";
?>
