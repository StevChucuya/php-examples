<?php
include("14-herencias.php");

echo "Ejemplo de herencias con animales\n";

$perro = new Perro("Cimita","Verde",false,"sound-dog.mp3");

echo $perro->obtenerInformacion()."\n";
echo $perro->hacerSonido("Guaaa");

$perro
?>