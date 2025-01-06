<?php
// 2. Merge Sort - Ordenamiento alfabético de palabras
function mergeSort(&$arr) {
    if (count($arr) <= 1) {
        return;
    }
    
    $medio = floor(count($arr) / 2);
    $izquierda = array_slice($arr, 0, $medio);
    $derecha = array_slice($arr, $medio);
    
    mergeSort($izquierda);
    mergeSort($derecha);
    
    $i = 0;
    $j = 0;
    $k = 0;
    
    while ($i < count($izquierda) && $j < count($derecha)) {
        if (strcasecmp($izquierda[$i], $derecha[$j]) <= 0) {
            $arr[$k] = $izquierda[$i];
            $i++;
        } else {
            $arr[$k] = $derecha[$j];
            $j++;
        }
        $k++;
    }
    
    while ($i < count($izquierda)) {
        $arr[$k] = $izquierda[$i];
        $i++;
        $k++;
    }
    
    while ($j < count($derecha)) {
        $arr[$k] = $derecha[$j];
        $j++;
        $k++;
    }
}

//Prueba
echo "2. Prueba de Merge Sort (orden alfabético):\n";

$palabras = ["manzana", "pera", "banana", "uva", "kiwi", "naranja"];

imprimirArray($palabras, "Lista original:");

mergeSort($palabras);

imprimirArray($palabras, "Lista ordenada:");
