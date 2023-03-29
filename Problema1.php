<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Escribe un programa que pida por teclado un dia de la semana y que diga que asignatura toca a primera hora ese dia -->

<!DOCTYPE html>
<html>
<head>
	<title>Asignatura primera hora</title>
</head>
<body>
	<h1>¿Qué asignatura toca a primera hora?</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="dia">Introduce un día de la semana:</label>
		<input type="text" id="dia" name="dia">
		<input type="submit" value="Enviar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$dia = $_POST["dia"];

			if ($dia == "lunes") {
				echo "<p>A primera hora toca: Tecnologia Web - 500</p>";
			} elseif ($dia == "martes") {
				echo "<p>A primera hora toca: Control y Automatizacion - 500</p>";
			} elseif ($dia == "miércoles") {
				echo "<p>A primera hora toca: Telematica - 500</p>";
			} elseif ($dia == "jueves") {
				echo "<p>A primera hora toca: Emprendimiento Productivo - 500</p>";
			} elseif ($dia == "viernes") {
				echo "<p>A primera hora toca: Sistemas Informaticos - 500</p>";
			} else {
				echo "<p>Introduce un día válido de la semana</p>";
			}
		}
	?>
</body>
</html>