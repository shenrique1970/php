<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Sorteador de números.</h1>
    </header>
    <section>
        <form method="post">
            <button type="submit">Gerar número aleatório 🎲 </button>
        </form>
    </section>
    <section>
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // rand() é de 1951.
            // mt_rand() é de 1997.
            // random_int() gera numero criptorafos seguros e é mais lento de todos.
            $numero = mt_rand(0, 100);

            echo "<div class='resultado'>Número sorteado: <strong>$numero</strong></div>";
            
        }

        ?>
    </section>
</body>

</html>