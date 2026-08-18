<?php
// Cálculo do preço do produto e a quantidade comprada
$preco = 250; // Preço do produto
$quantidade = 2; // Quantidade comprada
$total = $preco * $quantidade; // Cálculo do total

// Aplicação de desconto se o total for maior que 200
if ($total > 200) {
    $desconto = $total * 0.10;
    $valorFinal = $total - $desconto;
} else {
    $valorFinal = $total;
}

// Exibição dos resultados
echo "Valor total da compra: R$ " . number_format($total, 2, ',', '.') . "<br>";
echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.');

?>