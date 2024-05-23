<?php
include("16-encapsulamiento.php");

/*
$guitarra = new Instrumento("gibson","acustica");
echo "Datos de Guitarra\n";
echo "nombre: ".$guitarra->nombre."\n";
echo "categoria: ".$guitarra->categoria;
*/


$guitarra = new Instrumento("gibson","acustica");
$guitarra->setearModelos("nylon, alambre");
echo "Datos de Guitarra\n";
echo "nombre: ".$guitarra->nombre."\n";
echo "categoria: ".$guitarra->categoria."\n";
echo "modelos: ".$guitarra->mostrarModelos();


$guitarra->nombre = "yamaha";
$guitarra->categoria = "electronica";
$guitarra->setearModelos("nylon, alambre, otros");
echo "\nDatos de Guitarra\n";
echo "nombre: ".$guitarra->nombre."\n";
echo "categoria: ".$guitarra->categoria."\n";
echo "modelos: ".$guitarra->mostrarModelos();
echo "\nTiene cuerdas?: ".$guitarra->validarCuerdas();







?>