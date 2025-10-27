<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função simples em PHP</title>
</head>

<body>
    <?php
        $nome = $_POST["nome"] ?? "";
    ?>
    <section>
        <h2>Função simples de saudação </h2>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="nome">Saudar:</label>
            <input type="text" name="nome" value="<?= $nome ?>" required>

            <input type="submit" value="Enviar">
        </form>
    </section>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            saudacao($nome);
        }

        function saudacao($nome)
        {
            echo "<p>Olá,  Bem-vindo(a) ao PHP <strong>" . htmlspecialchars($nome) . "</strong>!.</p>";
        }
    ?>
</body>

</html>