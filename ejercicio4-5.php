<?php

$buscar = ($_REQUEST['buscar']);

//Buscar contacto
$nombre_archivo = "agenda.txt";
$contenido = file_get_contents($nombre_archivo);

$abrir = fopen($nombre_archivo, "r");
$coincidencia = false;

while (!feof($abrir)) {
    $linea = fgets($abrir);
    if (strpos($linea, "Contacto: $buscar") !==false){
        echo "El contacto que buscas es: $linea<br>";
        $coincidencia = true;
    }
}
fclose($abrir);
if (!$coincidencia){
    echo "No existe ningun contacto con el nombre: $buscar";
}
 
?>