<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Salário</h1>
    </header>
    <main>
        <!--$_SERVER['PHP_SELF'] envia o formulario pra ele mesmo -->
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="renda">Informe o salário?</label>
            <input type="number" name="renda" step="0.01" required>
            <label for="salario">Informe o salário minimo vigente?</label>
            <input type="number" name="salario" step="0.01" required>

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
        $renda = isset($_POST["renda"]) ? (float) $_POST["renda"] : 0;
        $sal = isset($_POST["salario"]) ? (float) $_POST["salario"] : 0;
    ?>
    <section>
        <h2>Resultado final</h2>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $sal > 0): ?>
            <?php
            $quant = (int) ($renda / $sal);
            $dif = $renda - ($quant * $sal);
            ?>
            <section>
                <h2>Resultado final</h2>
                <article>
                    <span>Considerando o salário mínimo de <b>R$ <?= number_format($sal, 2, ",", ".") ?></b></span><br>
                    <span>Quem recebe R$ <?= number_format($renda, 2, ",", ".") ?> recebe <?= $quant ?> salário(s) mínimo(s) mais a diferença de R$ <?= number_format($dif, 2, ",", ".") ?></span>
                </article>
            </section>
        <?php else: ?>
            <section>
                <h2>Resultado final</h2>
                <span>Aguardando o envio dos dados...</span>
            </section>
        <?php endif; ?>
</body>

</html>