<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escriba un programa que genere la serie 0,1,0,1,0-->

<?php 
    $numero = 8;
    for ($i=1; $i <= $numero; $i++) {
        if($i % 2 == 1){
            echo "0, ";
        }else{
            echo "1, ";
        }
    }