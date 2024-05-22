<?php   

//ejemplo 1
// hola mundo
 function obtenersaludo($parametro){
    return "Hola Como estas ".$parametro;
}

echo obtenersaludo("Stev")."\n";


// ejemplo 2

function mostrarDatos($nombres,$apellidos,$curso,$semestre){
    $mensaje = "Hola soy ".$nombres." ".$apellidos 
    ." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;
}

echo mostrarDatos("Stev","Chucuya","backen developer web","tercer semestre")."\n";


function calcular($operador,$numero1,$numero2){
    if($operador == "+")
    return $numero1 + $numero2;
      if($operador == "-")
      return $numero1 - $numero2;
       if($operador == "*")
       return $numero1 * $numero2;
        if($operador == "/")
        return $numero1 / $numero2;
}

echo "El total de la suma es: ".calcular("-",10,34);
?>
