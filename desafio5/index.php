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
    <main>
        <!--get-->
        <form action="analise.php" method="post">
            <label for="valor">Número real a ser analisado.</label>
            <input type="number" name="num" id="idnum" step="0.001">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>