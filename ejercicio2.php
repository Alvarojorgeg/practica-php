<?php


echo "<b>Jugador 1<b><br>";
$total=0;
$tota2=0;


for ($i = 1; $i < 6; $i++) {
    $random = rand(1,6);
    echo "<img src='./$random.jpg'>";
    $total = $total+$random;
    }

echo "<br><b>Jugador 2<b><br>";


for ($i = 1; $i < 6; $i++) {
    $random = rand(1,6);
    echo "<img src='./$random.jpg'>";
    $tota2 = $tota2+$random;
}

echo "<br><br>";

if ($total > $tota2){
    echo "El ganador es el Jugador 1";
}
else {
    echo "El ganador es el Jugador 2";
}
?>