<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Escribe un programa que calcule la media de tres notas (la nota es de 0 - 100). -->
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de media de notas</title>
</head>
<body>
	<h1>Calculadora de media de notas</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="nota1">Nota 1:</label>
		<input type="number" id="nota1" name="nota1" min="0" max="100" required>
		<br>
		<label for="nota2">Nota 2:</label>
		<input type="number" id="nota2" name="nota2" min="0" max="100" required>
		<br>
		<label for="nota3">Nota 3:</label>
		<input type="number" id="nota3" name="nota3" min="0" max="100" required>
		<br>
		<input type="submit" value="Calcular media">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nota1 = $_POST["nota1"];
			$nota2 = $_POST["nota2"];
			$nota3 = $_POST["nota3"];

			$media = ($nota1 + $nota2 + $nota3) / 3;

			echo "<p>La media de las notas es: " . $media . "</p>";
		}
	?>
</body>
</html>