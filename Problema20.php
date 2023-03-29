<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Escribe un programa que calcule el factorial de un numero entero leido por teclado. -->

<?php
if(isset($_POST['submit'])){
  $num = $_POST['num'];
  $factorial = 1;
  for($i = 1; $i <= $num; $i++){
    $factorial *= $i;
  }
  echo "El factorial de $num es $factorial";
}
?>
<form method="post" action="">
  <label>Introduce un número entero:</label>
  <input type="number" name="num" required>
  <input type="submit" name="submit" value="Calcular factorial">
</form>