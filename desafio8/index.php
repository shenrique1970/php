<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>Raízes</h1>
    </header>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="numero">Informe o número?</label>
            <input type="number" name="numero">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php 
        $numero = (float) $_POST["numero"];
    ?>
    <section>
        <h2>Resultado final</h2>
        <?php 
            // https://www.php.net/manual/pt_BR/function.sqrt.php
            // https://www.php.net/manual/pt_BR/function.pow.php
            // https://www.php.net/manual/en/function.number-format.php
            $raiz = sqrt($numero);    // ou usar $numero ** (1/2);
            $cubica = pow($numero, 1/3);    // ou usar $numero ** (1/3);
        ?> 
        <article>
            <h3>Analisando o número <?= $numero ?></h3>
            <p>Raiz quadrada: <?= number_format($raiz,3,",",".") ?></p>
            <p>Raiz cúbica: <?= number_format($cubica,3,",",".") ?></p>
        </article>
    </section>
</body>
</html>