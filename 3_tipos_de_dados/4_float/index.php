<?php 
echo 1000.90 + 349.90;
echo "<br>";
echo 2000.20 - 150.70;
echo "<br>";
echo 80 + 14.8888;
echo "<br>";
echo -600.60 -2000.90; // sim podemos ter float negativo
echo "<br>";

if (is_float(10.10)) {
    echo "É Float<br>";
}


$fn = -500.555;

if (is_float($fn)) {
    echo "É Float Negativo? Sim";
}
echo "<br>";
echo "$fn";

?>