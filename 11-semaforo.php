<?php

/*
1) Lanzar un program que permita imprimir
 los tres color del semaforo para el auto 
 siendo el siguiente enunciado:

 - si el semaforo esta en rojo debe decir ¡pare!
 - si el semaforo esta en amarillo debe decir ¡espera!
 - si el semaforo esta en verde debe decir ¡avanze! 

 para ello el programa debe pedir al usuario que ingrese 
 un numero o una letra para luego evaluar que color
 esta eligiendo.
*/

echo "\nBienvenido al sefamoro Senatino";
echo "\nSegun su suerte:";
echo "\n - Pasara";
echo "\n - Esperara";
echo "\n - NO ENTRARA

";


echo "\n   ¡SUERTE!                           
                                             
";
echo "\n       SEMAFORO SENATINO       ";
echo "\n-------------------------------";
echo "\n         VERDE = AVANZE        ";
echo "\n      AMARILLO = ESPERA        ";
echo "\n          ROJO = ALTO          ";
echo "\n-------------------------------";
echo "\ningrese un numero unico de 1 al 3: ";
$algo = fgets(STDIN);
$algo1 = 1;
$algo2 = 2;
$algo3 = 3;
if ($algo == $algo1) {
    echo "ROJO"; 
    echo "\n¡Usted detengase!";

}
elseif($algo == $algo2) {
    echo "AMARILLO";
    echo "\n¡Espere!"; 
}
elseif($algo == $algo3){
    echo "VERDE";
    echo "\n¡Avanze!";
}
else{
    echo "El numero que eligio no existe";
}
?>