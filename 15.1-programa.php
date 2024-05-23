<?php
include("15-poliformismo.php");


/*
echo "AREA DE TRAINGULO\n";
echo "INGRESE LA BASE: ";
$b = fgets(STDIN);
echo "INGRESE LA ALTURA: ";
$h = fgets(STDIN);
$triangulo = new Triangulo($b,$h);
$area = $triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES: ".$area;

echo "\nAREA DE RECTANGULO\n";
echo "INGRESE LA BASE:\n";
$b=fgets(STDIN);
echo "INGRESE LA ALTURA:\n";
$a = fgets(STDIN);
$rectangulo = new Rectangulo($b,$a);
$area = $rectangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES: ".$area;

echo "\nAREA DE CUADRADO\n";
echo "INGRESE EL PRIMER LADO:\n";
$l1=fgets(STDIN);
$cuadrado = new Cuadrado($l1);
$area = $cuadrado->calcularArea();
echo "EL AREA DEL CUADRADO: ".$area;
*/

echo "\nAREA DE CUADRADO\n";
echo "INGRESE LA RADIO:\n";
$r=fgets(STDIN);
$circulo = new Circulo($r);
$area = $circulo->calcularArea();
echo "El area o radio del circulo es:\n".$area;





?>