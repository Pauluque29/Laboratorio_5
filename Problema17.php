<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Escribe un programa que diga si un numero introducido por teclado es o no primo.
Un numero primo es aquel que solo es divisible entre el mismo y la unidad. -->

<?php
if(isset($_POST['submit'])){
  $num = $_POST['num'];
  $es_primo = true;
  for ($i=2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      $es_primo = false;
      break;
    }
  }
  if ($num <= 1) {
    $es_primo = false;
  }
  if ($es_primo) {
    echo "El número ingresado es primo.";
  } else {
    echo "El número ingresado no es primo.";
  }
}
?>
<form method="post" action="">
  <label>Introduce un número:</label>
  <input type="number" name="num" required>
  <input type="submit" name="submit" value="Verificar si es primo">
</form>