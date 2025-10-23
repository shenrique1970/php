<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <?php 
        $num = $_POST["num"] ?? 0;
    ?>
    <main>
        <?php 
            $int = (int) $num;
            $frac = $num - $int;
        ?>
        <article>
            <ul>
                <li>A parte inteira é <strong><?php echo number_format($int,0,",","."); ?></strong></li>
                <li>A parte fracionaria é <strong><?php echo number_format($frac,3,",","."); ?></strong></li>
            </ul>
        </article>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>