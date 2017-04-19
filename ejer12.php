<?php 
	$suma_pares = 0;
	$suma_impares = 0;
	for ($i = 1; $i <= 100;  $i++)
	{
		if ($i % 2 == 0)
		{
			$suma_pares += $i;
		}
		else 
		{
			$suma_impares += $i;
		}
	}
	echo "Pares: " . $suma_pares;
	echo "<br>";
	echo "Impares: " . $suma_impares;
?>
