<?php
include 'polyfill.php';

$f = readline('Informe a temperatura em graus Fahrenheit  ');

$c = (($f - 32)* 5) / 9;

echo "Em Celsius, a temperatura informada é de $c";