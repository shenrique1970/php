<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Cálculo de Idade.</h1>
    </header>
    <?php
    // Inicializa todas as variáveis com valor zero
    $ano = $anoFuturo = $anoNascimento = $anoAtual = $idade = $idadeFutura = 0;
    ?>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="ano">Informe o ano que nasceu</label>
            <input type="number" name="ano" value="<?= $ano ?? '' ?>">
            <span>Ano atual <b><?php $anoAtual = date("Y");echo $anoAtual; ?></b></span>
            <label for="anoFuturo">Quer saber sua idade em que ano</label>
            <input type="number" name="anoFuturo" value="<?= $anoFuturo ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $anoNascimento = (int) $_POST["ano"];
                $anoFuturo = (int) $_POST["anoFuturo"];
                $idade = $anoAtual - $anoNascimento;
                $idadeFutura = $anoFuturo - $anoNascimento;
            }
        ?>
        <article>
            <h2>Resultados</h2>
            <p>Você nasceu em <?= $anoNascimento ?> e tem <?= $idade ?> anos.</p>
            <?php if ($anoFuturo < $anoAtual) { ?>
            <p>No ano de <?= $anoFuturo ?> sua idade era <?= $idadeFutura ?> anos.</p>
            <?php } else { ?>
            <p>Em <?= $anoFuturo ?> você terá <?= $idadeFutura ?> anos.</p>
            <?php } ?>
        </article>
    </section>
</body>

</html>