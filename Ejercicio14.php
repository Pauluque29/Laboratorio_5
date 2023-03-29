<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escriba un programa para hallar el factorial de un numero-->

<?php
    $numero = 5;
    $factorial = 1;
    for ($i=1; $i<=$numero ; $i++) {
        $factorial *= $i;
    }
    echo "El factorial de $numero es: $factorial";
?>