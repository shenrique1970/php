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
    <?php 
        // busca valor digitado
        $real = $_GET["valor"];
    ?>
    <main>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            //var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            // valor em dolar
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>
        <section>
            <h2>Resultado da conversão</h2>
            <article>
            <?php
            echo "A cotação foi de " . numfmt_format_currency($padrao, $cotacao, "USD") . "<br>";
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . "<br>" . "equivalem a  " .  numfmt_format_currency($padrao, $dolar, "USD");
            ?>
            </article>
        </section>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>