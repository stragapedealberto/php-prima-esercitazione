?php

$base = $_POST["base"];
$altezza = $_POST["altezza"];

$area = $base * $altezza;
$perimetro = ($base + $altezza) * 2;
$diagonale = sqrt(pow($base, 2) + pow($altezza, 2));


?>