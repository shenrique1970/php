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
        $dolar = 5.17;
        $cotacao = $real / $dolar;
    ?>
    <section>
        <?php 
            echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$ " .  number_format($cotacao, 2, ",", ".");
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
    
</body>
</html>