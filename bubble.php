<?php

// 1. Bubble Sort - Ordenamiento descendente de números
function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar elementos
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Prueba
echo "1. Prueba de Bubble Sort (orden descendente):\n";

$numeros = [64, -34, 25, 12, 22, -11, 90, 25];

imprimirArray($numeros, "Lista original:");

bubbleSort($numeros);

imprimirArray($numeros, "Lista ordenada:");

?>
