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
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="numero">Preço do produto</label>
            <input type="number" name="preco" step="0.01">
            <label for="volume">Qual será o percentual de ajuste?</label>
            <input type="range" id="volume" name="volume" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value + '%'">
            <output>0%</output>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <article>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $preco = (float) $_POST["preco"];
            $percentual = (float) $_POST["volume"];
            $valorAjuste = $preco * ($percentual / 100);
            $precoAjustado = $preco + $valorAjuste;

            echo "O produto que custava R$ " . number_format($preco, 2, ",", ".") . ", com o reajuste de " . number_format($percentual, 2, ",", ".") . "%, vai passar a custar R$ " . number_format($precoAjustado, 2, ",", ".") . ".";
        }
        ?>
    </article>
</body>

</html>