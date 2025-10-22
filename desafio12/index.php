<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Calculadora de tempo</h1>
    </header>

    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="segundos">Qual o total de segundo?</label>
            <input type="number" name="segundos">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <article>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $segundos = (int) $_POST["segundos"];
            $minutos = floor($segundos / 60);
            $horas = floor($minutos / 60);
            $dias = floor($horas / 24);
            $semanas = floor($dias / 7);
            $meses = floor($dias / 30);
            $anos = floor($dias / 365);

            echo "<article>";
            echo "<h2>Totalisando tudo.</h2>";
            echo "<ul>";
            echo "<li>Segundos " . number_format($segundos, 3, ",", ".") . "</li>";
            echo "<li>Minutos " . number_format($minutos, 3, ",", ".") . "</li>";
            echo "<li>Horas " . number_format($horas, 3, ",", ".") . "</li>";
            echo "<li>Dias " . number_format($dias, 3, ",", ".") . "</li>";
            echo "<li>Semanas " . number_format($semanas, 3, ",", ".") . "</li>";
            echo "<li>Meses " . number_format($meses, 3, ",", ".") . "</li>";
            echo "<li>Anos " . number_format($anos, 3, ",", ".") . "</li>";
            echo "</ul>";
            echo "</article>";
        }
        ?>
    </article>
</body>

</html>