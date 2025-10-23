<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Desafio 1</h1>
    </header>
    <?php 
        // isset() para evitar erro
        if (isset($_GET["numero"])) {
            $numero = (int) $_GET["numero"];
        }
    ?>
    <main>
        <h3>Antecessor e sucessor.</h3>
        
        <?php
            echo "Número digitado: " . $numero . "<br>";
            echo "Número anterior: " . ($numero - 1) . "<br>";
            echo "Número posterior: " . ($numero + 1) . "<br>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
</body>

</html>