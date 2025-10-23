<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Reajustador de preços</h1>
    </header>
    <!--https://www.w3schools.com/tags/att_input_type_range.asp-->
    <main>
        <!--htmlspecialchars() para evitar vulnerabilidades XSS:
        é uma boa prática de segurança para proteger seu formulário 
        contra injeções de código malicioso, mantendo o envio na mesma página.
        -->
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="numero">Preço do produto</label>
            <input type="number" id="preco" name="preco" step="0.01" required>
            <label for="volume">Qual será o percentual de ajuste?</label>
            <input type="range" id="volume" name="volume" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value + '%'">
            <output><?= $_POST['volume'] ?? 0 ?>%</output>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <article>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php
            $preco = (float) $_POST["preco"];
            $percentual = (float) $_POST["volume"];
            $valorAjuste = $preco * ($percentual / 100);
            $precoAjustado = $preco + $valorAjuste;
            ?>
            <p>
                O produto que custava <strong>R$ <?= number_format($preco, 2, ",", ".") ?></strong>,
                com o reajuste de <strong><?= number_format($percentual, 0, ",", ".") ?>%</strong>,
                vai passar a custar <strong>R$ <?= number_format($precoAjustado, 2, ",", ".") ?></strong>.
            </p>
        <?php endif; ?>
    </article>
</body>

</html>