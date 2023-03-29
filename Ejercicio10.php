<!--        LABORATORIO 5
Nombre completo: Juan Paul Luque Lluta 
Docente:         Erik Vladimir Huallpa Aruquipa
Materia:         TEW-500
Fecha:           25 de marzo del 2023

-- Escriba un programa donde se introduzca un numero de 1 al 7, para mostrar su correspondiente dia de la semana, debe comenzar desde el domingo como primer dia-->

<?php
    $dia = 1;
    switch($dia){
        case 1:
            echo "Domingo";
        break;
        case 2:
            echo "Lunes";
            break;
        case 3:
            echo "Martes";
            break;
        case 4:
            echo "MIercoles";
            break;
        case 5:
           echo "Jueves";
         break;
         case 6:
            echo "Viernes";
            break;
        case 7:
             echo "Sabado";
                break;

            default:
                echo "Dia fuera de rango";
                break;
    }
?>