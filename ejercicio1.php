<?php
$alto = intval($_REQUEST['alto']);
$ancho = intval($_REQUEST['ancho']);

for ($i = 0; $i < $alto; $i++) {
    for ($a = 0; $a < $ancho; $a++) {
        echo "*";
    }
    echo "<br>";
}
?>