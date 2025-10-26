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
        $valor = (int) $_REQUEST["valor"] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="valor">Qual valor deseja sacar?</label>
            <input type="number" name="valor" id="valor" min="1" step="1" value="<?= $valor ?? 0 ?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponiveis: R$ 100, R$ 50,R$ 10, R$ 5, R$ 2, R$ 1</p>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    // Verifica se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Documentação sobre operadores de atribuição em PHP
        // https://www.php.net/manual/pt_BR/language.operators.assignment.php
        
        $saque = $valor;    // A variável $valor representa o valor total que será sacado $saque.
        $resto = $saque;    // Inicialmente, o "resto" é igual ao valor total do saque.
        $notaCem = floor($resto / 100);    // Aqui, o código calcula quantas notas de R$100 cabem no valor do saque.
        $resto = $resto % 100;    // Após retirar as notas de R$100, calcula-se o restante do valor.

        $notaCinquenta = floor($resto / 50);    // Aqui, o código calcula quantas notas de R$50 cabem no valor do saque.
        $resto %= 50; // Após retirar as notas de R$50, calcula-se o restante do valor.

        $notaVinte = floor($resto / 20);    // Aqui, o código calcula quantas notas de R$20 cabem no valor do saque.
        $resto %= 20;    // Após retirar as notas de R$20, calcula-se o restante do valor.

        $notaDez = floor($resto / 10);    // Aqui, o código calcula quantas notas de R$10 cabem no valor do saque.
        $resto %= 10;    // Após retirar as notas de R$10, calcula-se o restante do valor.

        $notaCinco = floor($resto / 5);  // Aqui, o código calcula quantas notas de R$5 cabem no valor do saque.
        $resto %= 5;   // Após retirar as notas de R$5, calcula-se o restante do valor.

        $notaDois = floor($resto / 2);  // Aqui, o código calcula quantas notas de R$2 cabem no valor do saque.
        $resto %= 2;   // Após retirar as notas de R$2, calcula-se o restante do valor.

        $notaUm = floor($resto / 1);  // Aqui, o código calcula quantas notas de R$1 cabem no valor do saque.
        $resto %= 1;   // Após retirar as notas de R$1, calcula-se o restante do valor.
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
                <?php if ($notaDois > 0) { ?>
                    <li><img src="img/2-reais.jpg" alt="Dois" width="100px"> X <?= $notaDois ?> </li>
                <?php } ?>
                <?php if ($notaUm > 0) { ?>
                    <li><img src="img/1-real.jpg" alt="Um" width="100px"> X <?= $notaUm ?> </li>
                <?php } ?>
            </ul>

            <?php if ($resto > 0) { ?>
                <p>Não foi possível sacar o valor de R$ <?= $resto ?>,00 com as cédulas disponíveis.</p>
            <?php } ?>
        </article>
    </section>
</body>

</html>