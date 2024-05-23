<?php
include("14-herencias.php");

echo "Ejemplo de herencias con animales\n";
echo "Porfavor elija un numero del 1 al 3: ";
$elegir = fgets(STDIN);


switch ($elegir) {
case 1 :
$perro = new perro("Cimita","Verde",false,"sound-dog.mp3");
echo $perro->obtenerInformacion()."\n";
echo $perro->hacerSonido("Guaaa")."\n";
$perro;

break;

case 2:
$gato = new Gato("Polilla","Rojo",false,"Maullido.mp3");
echo $gato->obtenerInformacion()."\n";
echo $gato->hacerSonido("Miauuu")."\n";
$gato;

break;

case 3:
$pollo = new Pollo("Ganzo","Amarillo",false,"pollo.mp3");
echo $pollo->obtenerInformacion()."\n";
echo $pollo->hacerSonido("Pio pio pio");
$pollo;

break;
        default:
        echo "no existe";
        break;
    }
?>