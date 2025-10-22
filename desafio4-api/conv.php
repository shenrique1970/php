<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Conversor de moedas.</h1>
    </header>
    <main>
        <?php
        // valor do dolar $_GET["cotacao"];
        // o dia dehoje menos 7 dias em php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        // data atual
        $fim = date("m-d-Y");
        // 
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        //var_dump($dados);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        // busca valor digitado
        $real = $_GET["valor"];
        // valor em dolar
        $dolar = $real / $cotacao;
        // internacionalização da moeda intl
        // $padrao = numfmt_create("us", NumberFormatter::CURRENCY);
        // $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
        // $padrao = numfmt_create("ur_RU", NumberFormatter::CURRENCY);
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "<section><pre>";
        echo "A cotação foi de " . numfmt_format_currency($padrao, $cotacao, "USD") . "<br>";
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "<br>" . "equivalem a  " .  numfmt_format_currency($padrao, $dolar, "USD");
        echo "</pre></section>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>