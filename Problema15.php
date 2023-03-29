<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Muestra la tabla de multiplicar de un numero introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML). -->

<?php
if(isset($_POST['submit'])){
  $num = $_POST['num'];
  echo "<table border='1'>";
  for ($i=1; $i <= 10; $i++) {
    echo "<tr><td>" . $num . " x " . $i . "</td><td>" . ($num*$i) . "</td></tr>";
  }
  echo "</table>";
}
?>
<form method="post" action="">
  <label>Introduce un número:</label>
  <input type="number" name="num" required>
  <input type="submit" name="submit" value="Mostrar tabla">
</form>