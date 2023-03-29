<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Realiza un programa que diga si un  numero entero positivo introducido por tecclado es capicua. se permiten numeros de hasta 5 cifras -->
<!DOCTYPE html>
<html>
<head>
	<title>Comprobar si un número es capicúa</title>
</head>
<body>
	<h1>Comprobar si un número es capicúa</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numero">Introduce un número entero positivo de hasta 5 cifras:</label>
		<input type="number" id="numero" name="numero" min="0" max="99999" required>
		<br>
		<input type="submit" value="Comprobar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];

			if ($numero >= 0 && $numero <= 99999) {
				$cifra1 = floor($numero / 10000);
				$cifra2 = floor($numero / 1000) % 10;
				$cifra3 = floor($numero / 100) % 10;
				$cifra4 = floor($numero / 10) % 10;
				$cifra5 = $numero % 10;

				if ($cifra1 == $cifra5 && $cifra2 == $cifra4) {
					echo "<p>El número introducido es capicúa</p>";
				} else {
					echo "<p>El número introducido no es capicúa</p>";
				}
			} else {
				echo "<p>El número introducido no es válido</p>";
			}
		}
	?>
</body>
</html>