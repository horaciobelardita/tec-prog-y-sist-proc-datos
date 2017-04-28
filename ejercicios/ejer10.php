

<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<label for="numero">Numero</label>
			<input id="numero" name="text_input"/>
			<button name='submit' type="submit">Verificar</button>
		</form>

<?php 
	if (isset($_GET['submit'])) {
		if (isset($_GET["text_input"])) {
			if ($_GET["text_input"] > 0)
			{
				echo "Positivo";
			}
			else {
				echo "Negativo";
			}
		}
	}


?>
	</body>
</html>

