<?php
$jsonData = '{"nombre": "Juan", "edad": 30, "ciudad": "Madrid"}';

$phpObject = json_decode($jsonData);

// Acceder a las propiedades del objeto
echo $phpObject->nombre; // Output: Juan
echo $phpObject->edad;   // Output: 30
echo $phpObject->ciudad; // Output: Madrid
?>
