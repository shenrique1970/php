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
    <?php
    $valor = (int) $_REQUEST["valor"];
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="segundos">Qual valor deseja sacar?</label>
            <input type="number" name="valor" id="valor" min="5" step="5" value="<?= $valor ?? 0 ?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$ 100, R$ 50,R$ 10, R$ 5</p>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    // Verifica se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Documentação sobre operadores de atribuição em PHP
        // https://www.php.net/manual/pt_BR/language.operators.assignment.php
        // Calcula quantas cédulas de R$100 são necessárias
        $saque = $valor;
        $resto = $saque;
        $notaCem = floor($resto / 100);    // floor() arredonda para baixo.
        $resto = $resto % 100;

        // Calcula quantas cédulas de R$50 são necessárias
        $notaCinquenta = floor($resto / 50);
        $resto %= 50; // Atualiza o valor restante

        // Calcula quantas cédulas de R$20 são necessárias
        $notaVinte = floor($resto / 20);
        $resto %= 20;

        // Calcula quantas cédulas de R$10 são necessárias
        $notaDez = floor($resto / 10);
        $resto %= 10;

        // Calcula quantas cédulas de R$5 são necessárias
        $notaCinco = floor($resto / 5);
        $resto %= 5;
    }
    ?>
    <section>
        <h2>Resultado do Saque</h2>
        <p>Você solicitou um saque de R$ <?= number_format($valor, 2, ',', '.') ?></p>
        <p>Serão fornecidas as seguintes cédulas:</p>
        <article>
            <ul>
                <!-- só exibe se tiver mais que 0 -->
                <?php if ($notaCem > 0) { ?>
                    <li><img src="img/100-reais.jpg" alt="Cem" width="100px"> X <?= $notaCem ?> </li>
                <?php } ?>
                <?php if ($notaCinquenta > 0) { ?>
                    <li><img src="img/50-reais.jpg" alt="Cinquenta" width="100px"> X <?= $notaCinquenta ?> </li>
                <?php } ?>
                <?php if ($notaVinte > 0) { ?>
                    <li><img src="img/20-reais.jpg" alt="Vinte" width="100px"> X <?= $notaVinte ?> </li>
                <?php } ?>
                <?php if ($notaDez > 0) { ?>
                    <li><img src="img/10-reais.jpg" alt="Dez" width="100px"> X <?= $notaDez ?> </li>
                <?php } ?>
                <?php if ($notaCinco > 0) { ?>
                    <li><img src="img/5-reais.jpg" alt="Cinco" width="100px"> X <?= $notaCinco ?> </li>
                <?php } ?>

            </ul>

            <?php if ($resto > 0) { ?>
                <p>Não foi possível sacar o valor de R$ <?= $resto ?>,00 com as cédulas disponíveis.</p>
            <?php } ?>
        </article>
    </section>
</body>

</html>