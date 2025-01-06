<?php

// 3. Insertion Sort - Ordenamiento alfabético de nombres
function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
}

// Función auxiliar para imprimir arrays
function imprimirArray($arr, $mensaje) {
    echo $mensaje . "\n";
    echo implode(", ", $arr) . "\n\n";
}

echo "3. Prueba de Insertion Sort (orden alfabético):\n";

$nombres = ["Juan", "Ana", "Pedro", "María", "Carlos", "Sofía"];

imprimirArray($nombres, "Lista original:");

insertionSort($nombres);

imprimirArray($nombres, "Lista ordenada:");

?>
