<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - funções</title>
</head>

<body>
    <h1>Funções em PHP</h1>
    <?php
        $n1 = $_POST["numero"] ?? 1;
    ?>
    <section>
        <h2>Calculadora de Fatorial</h2>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="numero">Digite um numero para ver o fatorial:</label>
            <input type="number" name="numero" value="<?= $n1 ?>" required>

            <input type="submit" value="Calcular Fatorial">
        </form>
    </section>


    <?php
    // função mais complexa
    function calcularFatorial($n1)
    {
        if ($n1 < 0) {
            return "Fatorial não definido para números negativos.";
        } elseif ($n1 === 0) {
            return 1;
        } else {
            $fatorial = 1;
            for ($i = 1; $i <= $n1; $i++) {
                $fatorial *= $i;
            }
            return $fatorial;
        }
    }
    ?>
    <!--Retorna o fatorial do número digitado-->
    <?php echo "<p>O fatorial de " . htmlspecialchars($n1) . " é " . calcularFatorial($n1) . ".</p>"; ?>

</body>

</html>