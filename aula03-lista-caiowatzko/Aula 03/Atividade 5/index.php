<?php
include 'polyfill.php';

$f = readline('Informe a temperatura em graus Fahrenheit  ');

$c = (($f - 32)* 5) / 9;
$k = $c + 273.15;

echo "Em Kelvin, a temperatura informada é de $k";