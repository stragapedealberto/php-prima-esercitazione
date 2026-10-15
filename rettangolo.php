?php

$base = $_POST["base"];
$altezza = $_POST["altezza"];

$area = $base * $altezza;
$perimetro = ($base + $altezza) * 2;
$diagonale = sqrt(pow($base, 2) + pow($altezza, 2));

echo "<b>Area:</b> " . $area . "<br>";
echo "<b>Perimetro:</b> " . $perimetro . "<br>";
echo "<b>Diagonale:</b> " . $diagonale . "<br>";


?>