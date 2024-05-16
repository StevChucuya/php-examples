<?php
$LuzeNcendido = true;
    if($LuzeNcendido)
     echo "La luz esta encendida";
      else
       echo "la luz esta apagada";


       //case 2

       $sintomas_covid = 

       ["tos"=>true,
       "fiebre"=>true,
       "dolor"=>false,
       "perdida_olfato"=>false];

       if($sintomas_covid["tos"] && $sintomas_covid["fiebre"]){
        echo "\n Estas enfermo tienes covid. Ve y tomate un Panadol";

       }
       else{
        echo "\n Aún no estas enfermo";
       }

       //case 3, cuenta bancaria
       $saldo = 1000;
       if (!($saldo > 0)) {
        echo "\n Tiene saldo insuficiente";
       }
       else{
        echo "\n Tiene saldo";
       }
 //caso 4 realizar un programa que 
?>