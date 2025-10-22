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
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            
            <label for="numero1">1º valor</label>
            <input type="number" name="numero1" value="<?= $numero1 ?>">
            <label for="peso1">1ºPeso</label>
            <input type="number" name="peso1" value="<?= $peso1 ?>">

            <label for="numero2">2º valor</label>
            <input type="number" name="numero2" value="<?= $numero2 ?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" value="<?= $peso2 ?>">

            <input type="submit" value="Enviar">

        </form>
    </main>
    <section>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // https://www.php.net/manual/en/language.operators.arithmetic.php
            // https://www.php.net/manual/en/function.number-format.php
            $n1 = (float) $_POST["numero1"];
            $p1 = (float) $_POST["peso1"];
            $n2 = (float) $_POST["numero2"];
            $p2 = (float) $_POST["peso2"];

            echo "<h2>Resultado final</h2>";
            $mediaAritmetica = ($n1 + $n2) / 2;
            echo "A média aritmética entre " . $n1 . " e " . $n2 . " é igual a " . number_format($mediaAritmetica,2,",",".") . "<br>";
            
            // https://www.todamateria.com.br/media-ponderada/
            if (($p1 + $p2) == 0) {
                echo "A soma dos pesos não pode ser zero para o cálculo da média ponderada.<br>";
                return;
            }
            $mediaPonderada = (($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2);
            echo "A média ponderada entre " . $n1 . " e " . $n2 . " é igual a " . number_format($mediaPonderada,2,",",".") . "<br>";
        }
        
        ?>
    </section>
</body>
</html>