<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<p>Ingrese una frase</p>
			<br>
			<label for="name">Nombre</label>
			<input name="text_input" id="name"/>
			<button name="submit" type="submit">Calcular</button>
		</form>

<?php
if (isset($_GET['submit'])) {
	if (isset($_GET["text_input"])) {
		$cadena = $_GET["text_input"];
		echo "Letras en la frase ingresada: " . strlen($cadena);
	}

}
?>
	</body>
</html>
