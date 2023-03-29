<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Realiza un programa que pida una hora por teclado y que muestre luego buenos dias, buenas tardes o buenas noches segun la hora. 
se utilizaran los tramos de 6 a 12, de 13 a 20 y de 21 a 5, respectivamente. 
solo se tienen en cuenta las horas, los minutos no se deben introducir por teclado -->

<!DOCTYPE html>
<html>
<head>
	<title>Saludo según hora</title>
</head>
<body>
	<h1>¿Buenos días, buenas tardes o buenas noches?</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="hora">Introduce una hora:</label>
		<input type="text" id="hora" name="hora">
		<input type="submit" value="Enviar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$hora = $_POST["hora"];

			if ($hora >= 6 && $hora <= 12) {
				echo "<p>Buenos días</p>";
			} elseif ($hora >= 13 && $hora <= 20) {
				echo "<p>Buenas tardes</p>";
			} else {
				echo "<p>Buenas noches</p>";
			}
		}
	?>
</body>
</html>