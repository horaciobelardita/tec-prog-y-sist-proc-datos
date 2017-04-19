

<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<p>Ingrese un numero</p>
			<br>
			<input name="text_input"/>
			<button type="submit">Verificar</button>
		</form>

<?php 
	if (isset($_GET["text_input"])) {
		if ($_GET["text_input"] > 0)
		{
			echo "Positivo";
		}
		else {
			echo "Negativo";
		}
	}

?>
	</body>
</html>

