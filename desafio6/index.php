<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h1>Anatomia de uma divisão.</h1>
    </header>
    <?php
        $valoresDefinidos = isset($_GET['v1']) && isset($_GET['v2']);
        if ($valoresDefinidos) {
            $valor1 = (int) $_GET['v1'];
            $valor2 = (int) $_GET['v2'];

            if ($valor2 !== 0) {
                $quo = intdiv($valor1, $valor2);
                $sub = $quo * $valor2;
                $res = $valor1 % $valor2;
            } else {
                $quo = $sub = $res = "Indefinido";
            }
        } else {
            echo "<p>Preencha os dois valores para ver a estrutura da divisão.</p>";
            $valor1 = $valor2 = $quo = $sub = $res = "";
        }
    ?>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="v1">Dividendo:</label>
            <input type="number" id="v1" name="v1" min="0" value="<?= $valor1 ?>" required>

            <label for="v2">Divisor:</label>
            <input type="number" id="v2" name="v2" min="1" value="<?= $valor2 ?>" required>

            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php if ($valoresDefinidos): ?>
        <section>
            <h2>Estrutura da divisão</h2>
            <table>
                <tbody>
                    <tr>
                        <!--linha 1 coluna 1-->
                        <td><?= $valor1 ?></td>
                        <!--linha 1 coluna 2-->
                        <td style="border-left: solid 1px black;"><?= $valor2 ?></td>
                    </tr>
                    <tr>
                        <!--linha 2 coluna 1-->
                        <td><?= $sub ?></td>
                        <!--linha 2 coluna -->
                        <td style="border-left: solid 1px black; border-top: solid 1px black;">
                            <?= (int) $quo ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?= $res ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    <?php endif; ?>
</body>

</html>