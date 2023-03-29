<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Muestra por pantalla todos los numeros primos entre 2 y 100, ambos incluidos. -->

<?php
function es_primo($num) {
  for ($i=2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

echo "Los números primos entre 2 y 100 son:<br>";
for ($i=2; $i<=100; $i++) {
  if (es_primo($i)) {
    echo $i . "<br>";
  }
}
?>