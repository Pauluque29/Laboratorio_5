<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Realiza un programa que nos diga cuantos digitos tiene un numero introducido por teclado. -->

<?php
if(isset($_POST['submit'])){
  $num = $_POST['num'];
  $count = 0;
  while($num != 0){
    $num = (int)($num / 10);
    $count++;
  }
  echo "El número ingresado tiene " . $count . " dígitos.";
}
?>
<form method="post" action="">
  <label>Introduce un número:</label>
  <input type="number" name="num" required>
  <input type="submit" name="submit" value="Contar dígitos">
</form>