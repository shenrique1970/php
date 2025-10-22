<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Caixa eletrônnico.</h1>
    </header>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="segundos">Qual valor deseja sacar?</label>
            <input type="number" name="valor">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <article>
        <?php
        // Verifica se o formulário foi enviado via método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Documentação sobre operadores de atribuição em PHP
            // https://www.php.net/manual/pt_BR/language.operators.assignment.php

            // Captura o valor enviado pelo formulário e converte para inteiro
            $valor = (int) $_POST["valor"];

            // Calcula quantas cédulas de R$100 são necessárias
            $cem = (int) ($valor / 100);
            $valor %= 100; // Atualiza o valor restante após retirar as cédulas de R$100

            // Calcula quantas cédulas de R$50 são necessárias
            $cinquenta = (int) ($valor / 50);
            $valor %= 50; // Atualiza o valor restante

            // Calcula quantas cédulas de R$20 são necessárias
            $vinte = (int) ($valor / 20);
            $valor %= 20;

            // Calcula quantas cédulas de R$10 são necessárias
            $dez = (int) ($valor / 10);
            $valor %= 10;

            // Calcula quantas cédulas de R$5 são necessárias
            $cinco = (int) ($valor / 5);
            $valor %= 5;

            // Exibe o valor solicitado
            echo "<h2>Você solicitou um saque de R$ " . $_POST["valor"] . ",00</h2>";

            // Inicia a lista de cédulas fornecidas
            echo "<p>Serão fornecidas as seguintes cédulas:</p>";
            echo "<ul>";

            // Exibe a quantidade de cédulas de R$100, se houver
            if ($cem > 0) {
                echo "<li>$cem cédulas de R$ 100,00</li>";
            }

            // Exibe a quantidade de cédulas de R$50, se houver
            if ($cinquenta > 0) {
                echo "<li>$cinquenta cédulas de R$ 50,00</li>";
            }

            // Exibe a quantidade de cédulas de R$20, se houver
            if ($vinte > 0) {
                echo "<li>$vinte cédulas de R$ 20,00</li>";
            }

            // Exibe a quantidade de cédulas de R$10, se houver
            if ($dez > 0) {
                echo "<li>$dez cédulas de R$ 10,00</li>";
            }

            // Exibe a quantidade de cédulas de R$5, se houver
            if ($cinco > 0) {
                echo "<li>$cinco cédulas de R$ 5,00</li>";
            }

            // Finaliza a lista
            echo "</ul>";
        }
        ?>

    </article>
</body>

</html>