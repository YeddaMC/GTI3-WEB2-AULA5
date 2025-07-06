<?php

// Adicionando o CSS para o relatório gerado
echo '<link rel="stylesheet" href="5.1.css">';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['gerar_relatorio'])) {
    // Dados para gerar o relatório
    $acessos = [120, 135, 160, 200, 180, 90, 150];
    $diasSemana = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

    // Processamento
    $maior = max($acessos);
    $menor = min($acessos);
    $media = array_sum($acessos) / count($acessos);

    $diasComMais150 = [];
    foreach ($acessos as $indice => $valor) {
        if ($valor > 150) {
            $diasComMais150[] = "{$diasSemana[$indice]}: $valor acessos";
        }
    }

    // Exibição do relatório
    print "Maior acesso da semana: $maior\n  <br>";
   
    print "Menor acesso da semana: $menor\n  <br>";
    print "Média semanal de acessos: " . number_format($media, 2) . "\n  <br>";
    print "Dias com mais de 150 acessos:\n  <br>";
    print "- " . implode("  <br> - ", $diasComMais150) . "\n  <br>" ;
}
?>
