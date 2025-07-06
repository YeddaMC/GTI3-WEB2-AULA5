<?php
$vendas = [
    "Caneca Geek" => 34,
    "Camiseta Dev" => 52,
    "Mousepad RGB" => 27,
    "Chaveiro USB" => 41
];

// Cálculos
$total = array_sum($vendas);
$maisVendido = array_keys($vendas, max($vendas))[0];
$media = $total / count($vendas);

// Saída HTML completa
echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Vendas</title>
    <link rel="stylesheet" href="relatorioVendas.css">
</head>
<body>
    <h1>Relatório de Vendas Mensais</h1>
    <div class="relatorio">';
    
echo "Total de unidades vendidas: $total<br>";
echo "Produto mais vendido: $maisVendido<br>";
echo "Média de vendas por produto: " . number_format($media, 2) . "<br>";

echo '</div>
</body>
</html>';
