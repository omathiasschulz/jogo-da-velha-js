<?php
    require_once "inc/Header.php";
    require_once "autoload.php";
    echo "<br>";

    /*
    -- Google Charts:
    - Gráfico de Barra
    https://developers.google.com/chart/interactive/docs/gallery/barchart

    - Gráfico de Linha
    https://developers.google.com/chart/interactive/docs/gallery/linechart

    - Gráfico de Pizza
    https://developers.google.com/chart/interactive/docs/gallery/piechart

    Montar uma classe para o usuário montar um gráfico.
    */

    $titulo = "Cinco Cidades mais Populosas do Brasil";
    $legenda = "Nº Habitantes por Cidade";
    $nomeEixoX = "Cidade";
    $nomeEixoY = "Total de Habitantes (em milhões)";
    $arrayEixoX = [
        'Fortaleza (CE)',
        'São Paulo (SP)',
        'Brasília (DF)',
        'Salvador (BA)',
        'Rio de Janeiro (RJ)'
    ];
    $arrayEixoY = [
        2627482,
        12106920,
        3039444,
        2953986,
        6520266
    ];

    // BARRA
    $oBarra = new Barra($titulo, $legenda, $nomeEixoX, $nomeEixoY, $arrayEixoX, $arrayEixoY);
    echo $oBarra->gerarGrafico();


    // LINHA
    $tipoColunaX = Linha::TIPO_PALAVRA;

    $oLinha = new Linha($titulo, $legenda, $nomeEixoX, $tipoColunaX, $nomeEixoY, $arrayEixoX, $arrayEixoY);
    echo $oLinha->gerarGrafico();


    // PIZZA
    $oPizza = new Pizza($titulo, $arrayEixoX, $arrayEixoY);
    echo $oPizza->gerarGrafico();
    
?>

<div id="grafico_barra"></div>
<br><br>
<div id="grafico_linha"></div>
<br><br>
<div id="grafico_pizza" style="width: 900px; height: 500px;"></div>
<br><br>

<?php
    require_once "inc/Footer.php";
?>