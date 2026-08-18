<?php
// Cálculo da média, maior e menor nota de uma turma
$notas = [8.5, 7.0, 9.5, 6.0, 5.0];

// Variáveis
$soma = 0;
$maior = $notas[0];
$menor = $notas[0];

// Cálculo da soma, maior e menor nota
foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

// Cálculo da média
$media = $soma / count($notas);

// Exibição dos resultados
echo "Média da turma: " . number_format($media, 2, ',', '.') . "<br>";
echo "Maior nota: " . $maior . "<br>";
echo "Menor nota: " . $menor;

?>