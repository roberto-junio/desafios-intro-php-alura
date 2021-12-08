<?php

$peso = 1000;
$altura = 1.70;

$imc = $peso / $altura ** 2;

if ($imc <= 18.5) {
    echo "Seu IMC é: $imc. " . PHP_EOL;
    echo "Você está abaixo do peso.";
} else if ($imc <= 24.9) {
    echo "Seu IMC é: $imc. " . PHP_EOL;
    echo "Você está no peso ideal!";
} else if ($imc <= 29.9) {
    echo "Seu IMC é: $imc. " . PHP_EOL;
    echo "Você está levemente acima do peso.";
} else if ($imc <= 34.9) {
    echo "Seu IMC é: $imc. " . PHP_EOL;
    echo "Você está com obesidade grau I";
} else if ($imc <= 39.9) {
    echo "Seu IMC é: $imc. " . PHP_EOL;
    echo "Você está com obesidade grau II, cuidado...";
} else {
    echo "Seu IMC é: $imc. " . PHP_EOL;
    echo "Você está com obesidade mórbida :(";
}
