<?php
$nombre = ($_REQUEST['nombre']);
$telefono = ($_REQUEST['telefono']);
$matriculado = ($_REQUEST['matriculado']);
$opciones = ($_REQUEST['opciones']);
$enseñanza = ($_REQUEST['enseñanza']);

if ($opciones == "pantalla") {
echo "El Alumno $nombre, con telefono $telefono, esta matriculado en un $enseñanza<br>";
}
else {
    $datos = "El Alumno $nombre, con telefono $telefono, esta matriculado en un $enseñanza";
    file_put_contents("datos.txt", $datos);
}

?>