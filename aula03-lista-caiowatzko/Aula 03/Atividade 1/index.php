<?php
include 'polyfill.php';

$tempo = readline ('Quanto tempo, em horas, durou / vai durar a viagem?  ');
$vel = readline ('Qual foi / sera, em KM/H, a velocidade media?  ');

$dist = $tempo * $vel;
$litros_usados = $dist / 12;

echo PHP_EOL . "A velocidade media foi / sera $vel KM/H" . PHP_EOL;
echo "O tempo gasto foi/sera de $tempo Hora[s]" . PHP_EOL;
echo "A distancia percorrida foi / sera de $dist KM" . PHP_EOL;
echo "A quantidade de litros foi / sera de $litros_usados Litros" . PHP_EOL;