<?php 
	$cant_impares = 0;
	for ($i = 0; $i <= 100; $i++)
	{
		if ($i % 2 != 0)
		{
			$cant_impares++;
		}
	}
	echo $cant_impares;
?>
