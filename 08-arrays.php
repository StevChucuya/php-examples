<?php
//case 1
$numeros = array(1,3,5,2,6);
print_r($numeros);

//case 1.1
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($frutas);

//case 2
$estudiante = array("dni" =>"41235445","edad"=>27,"fechanacimiento"=>"2000-01-05","nombres"=>"pedro","apellidos"=>"paredes acero",
"semestre"=>3,"deuda"=>100.50,"notafinal"=>11.6);
print_r($estudiante);
foreach($estudiante as $key => $value){
    echo $key." - ".$value."\n";
}




//case 3
$estudiante1 = array("dni" =>"4123544545","edad"=>27,"fechanacimiento"=>"2000-01-05","nombres"=>"pedro","apellidos"=>"paredes acero",
"semestre"=>3,"deuda"=>100.50,"notafinal"=>11.6);
$estudiante2 = array("dni" =>"4123543145","edad"=>17,"fechanacimiento"=>"2004-01-05","nombres"=>"Macarius","apellidos"=>"paredes ",
"semestre"=>3,"deuda"=>10.50,"notafinal"=>14.6);
$estudiante3 = array("dni" =>"4123544005","edad"=>47,"fechanacimiento"=>"2007-01-05","nombres"=>"Buti","apellidos"=>" acero",
"semestre"=>3,"deuda"=>140.50,"notafinal"=>17.6);

$estudiantes = array($estudiante1,$estudiante2,$estudiante3);
foreach($estudiantes as $key1 => $estudiante){
    echo "Estudiante N".($key1+1)."\n";
    foreach($estudiante as $key=>$value){
        echo $key." - ".$value."\n";
    }
}

for ($i=0; $i <=count($estudiantes) -1; $i++) {
    echo "Estudiante - ".($i+1)."\n";
    echo "dni - ".$estudiantes[$i]["dni"]."\n";
    echo "edad - ".$estudiantes[$i]["edad"]."\n";
    echo "fechanacimiento - ".$estudiantes[$i]["fechanacimiento"]."\n";
    echo "nombres - ".$estudiantes[$i]["nombres"]."\n";
    echo "apellidos - ".$estudiantes[$i]["apellidos"]."\n";
    echo "semestre - ".$estudiantes[$i]["semestre"]."\n";
    echo "deuda - ".$estudiantes[$i]["deuda"]."\n";
    echo "notafinal - ".$estudiantes[$i]["notafinal"]."\n";

}
 $estudiante3["notafinal"] = 17.6;

 $equipo1 = ["messi","cueva","neymar"];
 $equipo2 = ["advincula","lewandowski","ronaldhino"];
 $equipos = array_merge($equipo1,$equipo2);
 foreach($equipos as $key=>$equipo){
    echo $equipo."\n";
 } 
?>