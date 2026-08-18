<?php
// Cálculo do Índice de Massa Corporal (IMC)
function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura ** 2);
    return $imc;
}

// Valores de teste
$peso = 70;
$altura = 1.75;

// Chamada da função
$imc = calcularIMC($peso, $altura);

echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";

// Classificação
if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc < 25) {
    echo "Classificação: Peso normal";
} elseif ($imc < 30) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}
