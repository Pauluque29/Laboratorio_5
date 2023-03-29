<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escriba un programa para determinar si el primer digito de un numero es igual al ultimo digito del mismo numero. Considere numero de 4 digitos-->

<?php 
    $numero     = 5695;
    $digitoU    = $numero % 10;
    $digitoP = intdiv($numero, 1000);
    if($digitoP == $digitoU){
        echo "Los digitos son iguales";
    }else{
        echo "Los digitos son desiguales";
    }
?>