<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Escribe un programa en que dado un numero de 1 al 7 escriba el correspondiente nombre del dia de la semana -->
<!DOCTYPE html>
<html>
<head>
	<title>Nombre del día de la semana</title>
</head>
<body>
	<h1>Nombre del día de la semana</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numero">Introduce un número del 1 al 7:</label>
		<input type="number" id="numero" name="numero" min="1" max="7">
		<input type="submit" value="Enviar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];

			switch ($numero) {
				case 1:
					echo "<p>Lunes</p>";
					break;
				case 2:
					echo "<p>Martes</p>";
					break;
				case 3:
					echo "<p>Miércoles</p>";
					break;
				case 4:
					echo "<p>Jueves</p>";
					break;
				case 5:
					echo "<p>Viernes</p>";
					break;
				case 6:
					echo "<p>Sábado</p>";
					break;
				case 7:
					echo "<p>Domingo</p>";
					break;
				default:
					echo "<p>Introduce un número del 1 al 7</p>";
			}
		}
	?>
</body>
</html>