<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 2</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>Fomulário retroalimentado.</h1>
    </header>
    <?php 
        // capturando dados do formulário.
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nome">Valor 1 </label>
            <input type="number" name="v1" value="<?= $valor1 ?>">
            <label for="snome">Valor 2 </label>
            <input type="number" name="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php echo $valor1 + $valor2 ?>
    </section>
</body>
</html>