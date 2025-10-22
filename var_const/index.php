<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Variáveis e constantes</h1>
    </header>
    <section>
        <?php
        $nome = "Sérgio";
        $sobrenome = "Ribeiro";
        echo "Nome: $nome $sobrenome ";

        $nomeCompleto = "Sérgio Ribeiro";

        // antigo
        define("EMPRESA", "TechCorp");
        // moderno
        const ANO_ATUAL = 2025;

        echo "Bem-vindo à " . EMPRESA . "<br>";
        echo "Ano: " . ANO_ATUAL;
        ?>
    </section>


</body>

</html>