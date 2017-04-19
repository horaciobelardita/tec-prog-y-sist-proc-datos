<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<p>Ingrese una frase</p>
			<br>
			<input name="text_input"/>
			<button type="submit">Calcular</button>
		</form>

<?php 
	if (isset($_GET["text_input"])) {
		$contador = 0;
		$cadena = $_GET["text_input"];
	echo "Letras en la frase ingresada: " . strlen($cadena);
	}
?>
	</body>
</html>
