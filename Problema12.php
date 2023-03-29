<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Muestra los numeros de 320 al 160, contando de 20 en 20 utilizando un bucle for. -->

<!DOCTYPE html>
<html>
<head>
	<title>Números de 320 a 160 contando de 20 en 20</title>
</head>
<body>
	<h1>Números de 320 a 160 contando de 20 en 20</h1>
	<p>Los números son:</p>
	<ul>
		<?php
			for ($i = 320; $i >= 160; $i -= 20) {
				echo "<li>$i</li>";
			}
		?>
	</ul>
</body>
</html>