<?php
include 'polyfill.php';

$c = readline('Informe a temperatura em graus Celsius  ');

$f = ((9 * $c) + 160) / 5;

echo "Em Fahrenheit, a temperatura informada é de $f";