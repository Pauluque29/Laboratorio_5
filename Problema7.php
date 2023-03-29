<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Escribe un programa que diga cual es la ultima cifra de un numero entero introducido por teclado -->
<!DOCTYPE html>
<html>
<head>
	<title>Última cifra de un número</title>
</head>
<body>
	<h1>Última cifra de un número</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numero">Introduce un número entero:</label>
		<input type="number" id="numero" name="numero" required>
		<br>
		<input type="submit" value="Calcular">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];

			$ultima_cifra = $numero % 10;

			echo "<p>La última cifra del número introducido es: $ultima_cifra</p>";
		}
	?>
</body>
</html>