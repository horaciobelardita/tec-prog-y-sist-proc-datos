<?php

	function leer(&$archivo, &$registro) {
		if (feof($archivo)) {
			return true;
		} else {
			$registro = fgets($archivo);
			return false;
		}

	}

	$arch = fopen("ejer15.txt", "r");
	$cant_alumnos = 0;
	$cant_varones = 0;
	$cant_muj_solteras = 0;
	$reg = "";
	$fin = leer($arch, $reg);
	while (! $fin ) {
		$campos = explode(",", $reg);
		$cant_alumnos += 1;
		if ($campos[1] == 1)
		{
			$cant_varones += 1;
		}
		else {
			if ($campos[2] == 1) {
				$cant_muj_solteras += 1;
			}
		}
		$fin = leer($arch, $reg);

	}
	fclose($archivo);
	echo "Cantidad de alumnos: " . $cant_alumnos . "<br>";
	echo "Cantidad de varones: " . $cant_varones . "<br>";
	echo "Cantidad de mujeres solteras: " . $cant_muj_solteras . "<br>";
?>