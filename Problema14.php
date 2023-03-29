<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Muestra los numeros de 320 al 160 , contando de 20 en 20 utilizando un bucle do-while. -->

<?php
$num = 320;
do {
  echo $num . " ";
  $num -= 20;
} while ($num >= 160);
?>