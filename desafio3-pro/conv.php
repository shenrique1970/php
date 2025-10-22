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
        $cotacao = 5.17;
        // busca valor digitado
        $real = $_GET["valor"];
        // valor em dolar
        $dolar = $real / $cotacao;
        // internacionalização da moeda intl
        // $padrao = numfmt_create("us", NumberFormatter::CURRENCY);
        // $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
        // $padrao = numfmt_create("ur_RU", NumberFormatter::CURRENCY);
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a  " .  numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>