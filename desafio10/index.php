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
    <article>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $anoNascimento = (int) $_POST["ano"];
                $anoFuturo = (int) $_POST["anoFuturo"];
                $idade = $anoAtual - $anoNascimento;
                $idadeFutura = $anoFuturo - $anoNascimento;

                echo "<p>Você nasceu em $anoNascimento e tem $idade anos.</p><br>";
                if ($anoFuturo < $anoAtual) {
                    echo "<p>No ano de $anoFuturo sua idade era $idadeFutura anos.</p>";
                } else
                echo "<p>Em $anoFuturo você terá $idadeFutura anos.</p>";
            }
        ?>
    </article>
</body>

</html>