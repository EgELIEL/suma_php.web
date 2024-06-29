<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: Por favor ingrese números válidos.";
    exit;
}

function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        echo "Error: No se puede dividir por cero.";
        exit;
    }
    return $a / $b;
}


switch ($operacion) {
    case 'suma':
        $resultado = suma($num1, $num2);
        break;
    case 'resta':
        $resultado = resta($num1, $num2);
        break;
    case 'multiplicacion':
        $resultado = multiplicacion($num1, $num2);
        break;
    case 'division':
        $resultado = division($num1, $num2);
        break;
    default:
        echo "Error: Operación no válida.";
        exit;
}


echo "El resultado de $operacion entre $num1 y $num2 es: $resultado";
?>
