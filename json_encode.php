<?php
class Persona {
    public $nombre;
    public $edad;
    public $ciudad;
}

$persona = new Persona();
$persona->nombre = "María";
$persona->edad = 25;
$persona->ciudad = "Barcelona";

$jsonPersona = json_encode($persona);

echo $jsonPersona;
?>