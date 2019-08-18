<?php
include 'polyfill.php';

$peso = readline('Informe o seu peso em KG: ');
$altura = readline ('Informe sua altura em Centimetros: ');

$imc = $altura * $altura;
$imctot = $peso / $imc;
$imc2 = number_format($imctot);

if ($imc2 >=16 && $imc2 <=16.9){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo 'Voce esta muito abaixo do peso, deve mudar de habitos';
}else if ($imc2 >=17 && $imc2  <=18.4){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo "Voce esta abaixo do peso, tente mudar de habitos";
}else if ($imc2 >=18.5 && $imc2  <=24.9){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo "Voce esta com o peso normal, continue assim";
}else if ($imc2 >=25 && $imc2  <=29.9){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo "Voce esta acima do peso, pense em mudar de habitos";
}else if ($imc2 >=30 && $imc2  <=34.9){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo 'Voce esta com obesidade grau I, deve mudar de habitos';
} else if ($imc2 >=35 && $imc2  <=40){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo 'Voce esta com obesidade guar II, deve mudar de habitos agora';
}else if ($imc2 >40){
	echo "seu peso é de $imc2 KH/M2" . PHP_EOL;
	echo 'Voce esta com obesidade grau III, va ate um especialista';
}