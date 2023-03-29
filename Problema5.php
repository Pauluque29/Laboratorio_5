<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Amplia el programa anterior para que diga la nota del boletin
 (insuficiente <= 60, suficiente => 61, bien >= 71, notable >= 81 y sobresaliente >= 100). -->
 <!DOCTYPE html>
<html>
<head>
	<title>Calculadora de nota del boletín</title>
</head>
<body>
	<h1>Calculadora de nota del boletín</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="nota">Introduce la nota:</label>
		<input type="number" id="nota" name="nota" min="0" max="100" required>
		<br>
		<input type="submit" value="Calcular nota">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nota = $_POST["nota"];

			if ($nota < 0 || $nota > 100) {
				echo "<p>La nota introducida no es válida. Debe estar entre 0 y 100.</p>";
			} elseif ($nota < 60) {
				echo "<p>Tu nota es insuficiente.</p>";
			} elseif ($nota < 70) {
				echo "<p>Tu nota es suficiente.</p>";
			} elseif ($nota < 80) {
				echo "<p>Tu nota es bien.</p>";
			} elseif ($nota < 90) {
				echo "<p>Tu nota es notable.</p>";
			} else {
				echo "<p>Tu nota es sobresaliente.</p>";
			}
		}
	?>
</body>
</html>