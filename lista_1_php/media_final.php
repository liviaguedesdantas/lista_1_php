<?php
$media = 6.0; // Média do aluno
$faltas = 10; // Número de faltas do aluno

// Verificação da aprovação do aluno
if ($media >= 6.0 && $faltas <= 15) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}

?>