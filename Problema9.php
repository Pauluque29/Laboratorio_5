<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Muestra los numeros multiplos de 5 de 0 a 100 utilizando un bucle for. -->
<!DOCTYPE html>
<html>
<head>
	<title>Números múltiplos de 5</title>
</head>
<body>
	<h1>Números múltiplos de 5</h1>
	<p>Los números múltiplos de 5 de 0 a 100 son:</p>
	<ul>
		<?php
			for ($i = 0; $i <= 100; $i++) {
				if ($i % 5 == 0) {
					echo "<li>$i</li>";
				}
			}
		?>
	</ul>
</body>
</html>