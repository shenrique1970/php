<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Médias Aritméticas</h1>
    </header>
    <?php
    $n1 = isset($_POST["numero1"]) ? (float) $_POST["numero1"] : 0;
    $p1 = isset($_POST["peso1"]) ? (float) $_POST["peso1"] : 0;
    $n2 = isset($_POST["numero2"]) ? (float) $_POST["numero2"] : 0;
    $p2 = isset($_POST["peso2"]) ? (float) $_POST["peso2"] : 1;
    ?>
    <main>
        <!--Exibe o caminho do arquivo atual, útil para definir a ação do formulário.
        Isso garante que o formulário será enviado para a mesma página que o usuário está acessando.-->
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <label for="numero1">1º valor</label>
            <input type="number" name="numero1" value="<?= $n1 ?>" required>
            <label for="peso1">1ºPeso</label>
            <input type="number" name="peso1" value="<?= $peso1 ?>" required>
            <label for="numero2"> 2º valor</label>
            <input type="number" name="numero2" value="<?= $n2 ?>" required>
            <label for="peso2">2ºPeso</label>
            <input type="number" name="peso2" value="<?= $p2 ?>" required>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <?php
        $mediaAritmetica = ($n1 + $n2) / 2;
        // verifica se a soma dos pesos é maior que zero
        $mediaPonderada = ($p1 + $p2 > 0) ? (($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2) : 0;
        ?>
        <section>
            <h2>Cálculo das médias.</h2>
            <p>Analisando os valores <?= $n1 ?> e <?= $n2 ?>:</p>
            <article>
                <ul>
                    <li>A média aritmética simples entre os valores <?= $n1 ?> e <?= $n2 ?> é igual a <?= number_format($mediaAritmetica, 2, ",", ".") ?>.</li>
                    <li>A média aritmética ponderada com pesos <?= $p1 ?> e <?= $p2 ?> é igual a <?= number_format($mediaPonderada, 2, ",", ".") ?>.</li>
                </ul>
            </article>
        </section>
    <?php endif; ?>

</body>

</html>