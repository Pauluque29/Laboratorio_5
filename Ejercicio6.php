<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

--Escriba un programa para determinar si un numero introducido por teclado es mayor s 0 y menor igual a 10.-->

<?php
    $numero = 6;
    if($numero > 0 && $numero <= 10){
        echo "$numero se encuetra en el rango";
    }else{
        echo "$numero esta fuera de rango";
    }
?>