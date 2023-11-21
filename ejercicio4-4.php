<?php
$nombre = ($_REQUEST['nombre']);
$trabajo = ($_REQUEST['trabajo']);
$telefono = ($_REQUEST['telefono']);
$direccion = ($_REQUEST['direccion']);
$otras = ($_REQUEST['otras']);
$buscar = ($_REQUEST['buscar']);

//Agregar

$nombre_archivo = "agenda.txt";
$datos = "Contacto: $nombre, con telefono $telefono, trabaja en $trabajo, su direccion es $direccion y $otras<br>";
file_put_contents($nombre_archivo, $datos, FILE_APPEND);


//Ver agenda

echo "<h1>Lista de la agenda</h1>";
$contenido = file_get_contents($nombre_archivo);
echo "$contenido";

?>