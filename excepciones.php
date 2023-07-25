<?php
function dividir($dividendo, $divisor) {
    if ($divisor === 0) {
        throw new Exception("No se puede dividir por cero.");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(10, 2); // Output: 5
    echo dividir(10, 0); // Lanzará una excepción
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Output: Error: No se puede dividir por cero.
}
?>
