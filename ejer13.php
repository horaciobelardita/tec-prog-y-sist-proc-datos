<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<p>Ingrese cinco numeros</p>
			<br>
			<input name="n1"/>
			<input name="n2"/>
			<input name="n3"/>
			<input name="n4"/>
			<input name="n5"/>
			<button type="submit" name="submit">Cual es el mayor y menor?</button>
		</form>

<?php 
	if (isset($_GET["submit"])) {
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		$n3 = $_GET['n3'];
		$n4 = $_GET['n4'];
		$n5 = $_GET['n5'];
		echo "Mayor: " . max($n1, $n2, $n3, $n4, $n5);
		echo "<br>";
		echo "Menor: " . min($n1, $n2, $n3, $n4, $n5);
	}

?>
	</body>
</html>
