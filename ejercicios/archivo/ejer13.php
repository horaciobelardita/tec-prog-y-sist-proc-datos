<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<p>Ingrese cinco numeros</p>
			<br>
			<label for="n1">Primer Numero</label>
			<input id='n1' name="n1"/>
			<label for="n2">Segundo Numero</label>
			<input id='n2' name="n2"/>
			<label for="n3">Tercer Numero</label>
			<input id='n3' name="n3"/>
			<label for="n4">Cuarto Numero</label>
			<input id='n4' name="n4"/>
			<label for="n5">Quinto Numero</label>
			<input id='n5' name="n5"/>
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
