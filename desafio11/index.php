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

    <?php
    // Inicializando todas as variáveis
    $preco = $percentual = $valorAjuste = $precoAjustado = null;
    // é uma forma abreviada de inicializar várias variáveis ao mesmo tempo com o mesmo valor — neste caso, null
    // ?? — Operador de coalescência nula (PHP 7+) $valor = $_POST["campo"] ?? "valor padrão";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = isset($_POST["preco"]) ? (float) $_POST["preco"] : 0;
        $percentual = isset($_POST["volume"]) ? (float) $_POST["volume"] : 0;
        $valorAjuste = $preco * ($percentual / 100);
        $precoAjustado = $preco + $valorAjuste;
    }
    ?>

    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="preco">Preço do produto</label>
            <input type="number" id="preco" name="preco" step="0.01" value="<?= $preco ?? '' ?>" required>

            <label for="volume">Qual será o percentual de ajuste?</label>
            <input type="range" id="volume" name="volume" min="0" max="100" value="<?= $percentual ?? 0 ?>" oninput="this.nextElementSibling.value = this.value + '%'">
            <output><?= $percentual ?? 0 ?>%</output>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <article>
        <h3>
            O produto que custava <strong>R$ <?= number_format($preco, 2, ",", ".") ?></strong>,
            com o reajuste de <strong><?= number_format($percentual, 0, ",", ".") ?>%</strong>,
            vai passar a custar <strong>R$ <?= number_format($precoAjustado, 2, ",", ".") ?></strong>.
        </h3>
    </article>
    <?php endif; ?>
</body>
</html>
