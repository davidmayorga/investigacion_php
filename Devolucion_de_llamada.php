<?php
// Definimos una función que recibe un número y un callback
function operar($numero, $callback) {
    // Aplicamos el callback al número y retornamos el resultado
    return $callback($numero);
}

// Definimos una función de callback que suma 10 al número recibido
function sumarDiez($numero) {
    return $numero + 10;
}

// Definimos otra función de callback que resta 5 al número recibido
function restarCinco($numero) {
    return $numero - 5;
}

// Llamamos a la función operar con diferentes callbacks
$numero = 20;
$resultadoSuma = operar($numero, "sumarDiez");
$resultadoResta = operar($numero, "restarCinco");

// Mostramos los resultados
echo "Resultado de la suma: " . $resultadoSuma; // Output: Resultado de la suma: 30
echo "Resultado de la resta: " . $resultadoResta; // Output: Resultado de la resta: 15
?>
