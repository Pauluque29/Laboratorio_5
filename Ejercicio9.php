<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escriba un programa para las notas de 3 parciales, donde realize la suma el promedio y verificar si aprobo o reprobo.
La nota de aprobacion es 51.-->

<?php 
    $nota1 = 58;
    $nota2 = 58;
    $nota3 = 58;

    $promedio = ($nota1 + $nota2 + $nota3)/3;
    
    if($promedio){
        echo "Aprobo";
    }else{
        echo "Reprobo";
    }
?>

