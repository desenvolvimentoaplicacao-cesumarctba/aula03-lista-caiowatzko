<?php
include 'polyfill.php';

$c = readline('Informe a temperatura em graus Celsius  ');

$k = $c + 273.15;

echo "Em Kelvin, a temperatura informada é de $k";