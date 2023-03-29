<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Realiza un programa que diga si un numero introducido por teclado es par y/o divisible entre 5. -->
<!DOCTYPE html>
<html>
<head>
	<title>Comprobador de números</title>
</head>
<body>
	<h1>Comprobador de números</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numero">Introduce un número:</label>
		<input type="number" id="numero" name="numero" required>
		<br>
		<input type="submit" value="Comprobar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];

			if ($numero % 2 == 0) {
				echo "<p>El número introducido es par.</p>";
			} else {
				echo "<p>El número introducido es impar.</p>";
			}

			if ($numero % 5 == 0) {
				echo "<p>El número introducido es divisible entre 5.</p>";
			} else {
				echo "<p>El número introducido no es divisible entre 5.</p>";
			}
		}
	?>
</body>
</html>