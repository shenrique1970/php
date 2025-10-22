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
        $n1 = (float) $_GET["numero1"];
        $p1 = (float) $_GET["peso1"];
        $n2 = (float) $_GET["numero2"];
        $p2 = (float) $_GET["peso2"];
    ?>
    <main>
        <!--Exibe o caminho do arquivo atual, útil para definir a ação do formulário.
        Isso garante que o formulário será enviado para a mesma página que o usuário está acessando.-->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            
            <label for="numero1">1º valor</label>
            <input type="number" name="numero1" value="<?= $numero1 ?>">
            <label for="peso1">1ºPeso</label>
            <input type="number" name="peso1" value="<?= $peso1 ?>">
            <label for="numero2"> 2º valor</label>
            <input type="number" name="numero2" value="<?= $numero2 ?>">
            <label for="peso2">2ºPeso</label>
            <input type="number" name="peso2" value="<?= $peso2 ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Verifica se o formulário foi enviado usando o método POST.
            // Isso garante que os dados estão sendo recebidos corretamente após o envio do formulário.
            // https://www.php.net/manual/en/language.operators.arithmetic.php
            // https://www.php.net/manual/en/function.number-format.php
            $mediaAritmetica = ($n1 + $n2) / 2;
            $mediaPonderada = (($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2);
        }
        ?>
        <h2>Cálculo das médias.</h2>
        <p>Analisando os valores <?= $n1 ?> e <?= $n2 ?>:</p>
        <ul>
            <li>A média aritimética simples entre os valores <?= $n1 ?> e <?= $n2 ?> é igual a <?= number_format($mediaAritmetica,2,",",".") ?>.</li>
            <li>A média aritimética ponderada com pesos <?= $p1 ?> e <?= $p2 ?> é igual a <?= number_format($mediaPonderada,2,",",".") ?>.</li>
        </ul>
    </section>
</body>
</html>