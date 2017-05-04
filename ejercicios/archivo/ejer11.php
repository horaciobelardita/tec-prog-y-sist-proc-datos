<!Doctype html>
<html>
	<head></head>
	<body>
		<form>
			<label for="numero">Numero</label>
			<input name="text_input" id="numero"/>
			<button name="submit" type="submit">Verificar</button>
		</form>

<?php 
	if (isset($_GET['submit'])) {
		if (isset($_GET["text_input"])) {
			if ($_GET["text_input"] % 2 == 0)
			{
				echo "Par";
			}
			else {
				echo "Impar";
			}
		}
	}
	

?>
	</body>
</html>
