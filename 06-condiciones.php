<?php

//ejercicio 1
/*
$edadEstudiante1 = 20;
$edadEstudiante2 = 21;
if($edadEstudiante1 > $edadEstudiante2){
    echo "El estudiante 1 es mayor que el estudiante 2";
}
elseif($edadEstudiante1 == $edadEstudiante2) {
    echo "Ambos estudiante 1 tiene la misma edad que el estudiante 2";
}
else{
    echo "echo el estudiante 2 es mayor que el estudiante 1";
}
*/
//ejercicio 2
/*
echo "Ingrese su edad: ";
$edadEstudiante1 = fgets(STDIN);
$edadEstudiante2 = 21;
if($edadEstudiante1 > $edadEstudiante2){
    echo "El estudiante 1 es mayor que el estudiante 2";
}
elseif($edadEstudiante1 == $edadEstudiante2) {
    echo "Ambos estudiante 1 tiene la misma edad que el estudiante 2";
}
else{
    echo "El estudiante 2 es mayor que el estudiante 1";
}

*/
echo "\n";
echo "Ingrese su nota: ";
$notafinal = fgets(STDIN);
if($notafinal == 10.5){
    echo "Usted esta Aprobado a las justas";
}
elseif(10.5 < $notafinal && $notafinal <= 15) {
    echo "Usted esta aprobado de forma regular";
}
elseif($notafinal < 10.5 ){
        echo "Usted esta desaprobado";

    }
else{
    echo "Usted esta muy aprobado";
}







?>