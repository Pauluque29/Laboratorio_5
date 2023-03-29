<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

--Escriba un programa para determinar si el producto de dos numeros es negativo, positivo o igual a cero.-->

<?php
    $numeroA = 9;
    $numeroB = 5;
    $producto = $numeroA * $numeroB;
    if($producto > 0){
        echo "$producto : Es positivo";
    }elseif($producto == 0){
        echo "$producto : Es Igual a Cero";
    }else{
        echo "$producto : Es negativo";
    }
?>