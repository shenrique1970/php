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
    <!--https://brasilescola.uol.com.br/matematica/o-controle-tempo-suas-unidades-medida.htm-->
    <?php
        $total = $_REQUEST["segundos"] ?? 0; 
    ?>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="segundos">Qual o total de segundo?</label>
            <input type="number" name="segundos" id="seg" min="0" step="1" value="<?= $total ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        // https://www.youtube.com/watch?v=qEsWGf_Es3A&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=43
        $sobra = $total;
        $semana = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;
        $dias = (int) ($sobra / 86400);
        $sobra = $sobra % 86400;
        $horas = (int) ($sobra / 3600);
        $sobra = $sobra % 3600;
        $minutos = (int) ($sobra / 60);
        $segundos = (int) ($sobra % 60);
    ?>
    <section>
        <h2>Totalizando tudo.</h2>
        <p>Digitou <strong><?= number_format($total, 3, ",", ".") ?></strong> segundos.</p>
        <article>
            <ul>
                <?php if ($semana > 0) { ?>
                    <li> [<?= $semana?>] Semanas</li>
                <?php } ?>
                <?php if ($dias > 0) { ?>
                    <li> [<?= $dias?>] Dias</li>
                <?php } ?>
                <?php if ($horas > 0) { ?>
                    <li> [<?= $horas?>] Horas</li>
                <?php } ?>
                <?php if ($minutos > 0) { ?>
                    <li> [<?= $minutos?>] Minutos</li>
                <?php } ?>
                <?php if ($segundos > 0) { ?>
                    <li> [<?= $segundos?>] Segundos</li>
                <?php } ?>
            </ul>
        </article>

    </section>
</body>

</html>