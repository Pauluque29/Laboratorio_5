<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Realiza un programa que pida un numero por teclado y que luego muestre ese numero al reves. -->

<?php
if(isset($_POST['submit'])){
  $num = $_POST['num'];
  $num_reverso = strrev($num);
  echo "El número $num al revés es $num_reverso";
}
?>
<form method="post" action="">
  <label>Introduce un número:</label>
  <input type="number" name="num" required>
  <input type="submit" name="submit" value="Mostrar al revés">
</form>