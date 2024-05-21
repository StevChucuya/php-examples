<?php

include("12-clase.php");

echo "Bienvenido a mi calculadora \n";
echo "sumar (1)";
echo "restar (2)";
echo "multiplicar (3)";
echo "dividir (4)";
echo "potencia (5)";
echo "raiz (6)";

$opcion = fgets(STDIN);
switch ($opcion) {
    case 1:
        echo "Escriba el primer numero: ";
        $numero1 = fgets(STDIN);
        echo "\nEscriba el segundo numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new cAlculadora($numero1,$numero2);
        $resultado = $calculadora->sumar();
        echo "\nla suma es: ".$resultado;
        break;
    case 2:
        echo "Escriba el primer numero: ";
        $numero1 = fgets(STDIN);
        echo "\nEscriba el segundo numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new cAlculadora($numero1,$numero2);
        $resultado = $calculadora->restar();
        echo "\nla resta es: ".$resultado;
        break;
    case 3:
        echo "Escriba el primer numero: ";
        $numero1 = fgets(STDIN);
        echo "\nEscriba el segundo numero: ";
        $numero2 = fgets(STDIN);
        $calculadora = new cAlculadora($numero1,$numero2);
        $resultado = $calculadora->multiplicar();
        echo "\nla multiplicacion es: ".$resultado;


            break;
            case 4:
                echo "Escriba el primer numero: ";
                $numero1 = fgets(STDIN);
                echo "\nEscriba el segundo numero: ";
                $numero2 = fgets(STDIN);
                $calculadora = new cAlculadora($numero1,$numero2);
                $resultado = $calculadora->dividir();
                echo "\nla division es: ".$resultado;
                break;
                case 5:
                    echo "Escriba el primer numero: ";
                    $numero1 = fgets(STDIN);
                    echo "\nEscriba el segundo numero: ";
                    $numero2 = fgets(STDIN);
                    $calculadora = new cAlculadora($numero1,$numero2);
                    $resultado = $calculadora->potencia();
                    echo "\nla potencia es: ".$resultado;
                    break;
                    case 6:
                        echo "Escriba el primer numero: ";
                        $numero1 = fgets(STDIN);
                        $calculadora = new cAlculadora($numero1);
                        $resultado = $calculadora->raiz();
                        echo "\nla raiz es: ".$resultado;

                        break;
    default:
        # code...
        break;
}

?>