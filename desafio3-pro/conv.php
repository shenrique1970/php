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
        $real = $_GET["valor"];
    ?>
    <main>
        <?php
            $cotacao = 5.17;
            $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $padReal = numfmt_format_currency($padrao, $real, "BRL");
            $padDolar = numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <section>
            <h2>Detalhes da conversão</h2>
            <p>Valor convertido: <?php echo $padReal; ?></p>
            <p>Cotação utilizada: <?php echo numfmt_format_currency($padrao, $cotacao, "BRL"); ?></p>
            <p>Valor final em Dólares: <?php echo $padDolar; ?></p>
        </section>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>