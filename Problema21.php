<!--            LABORATORIO  5  
Apellidos y Nombres: Luque Lluta Juan Paul
Docente:             Lic. Erik Vladimir Huallpa Aruquipa
Semestre:            Quinto
Carrera:             Informatica Industrial

Generar la serie de n terminos: 1,3,5,7,9,11,...n. -->

<?php
if(isset($_POST['submit'])){
  $n = $_POST['n'];
  $termino = 1;
  echo "La serie es: ";
  for($i = 1; $i <= $n; $i++){
    echo $termino . " ";
    $termino += 2;
  }
}
?>
<form method="post" action="">
  <label>Introduce el número de términos:</label>
  <input type="number" name="n" required>
  <input type="submit" name="submit" value="Generar serie">
</form>