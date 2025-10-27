<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - repetião</title>
</head>
<body>
    <h1>Estruturas de Repetição em PHP</h1>

    <?php
        // Exemplo de estrutura de repetição: for
        echo "<h2>Exemplo de loop 'for'</h2>";
        for ($i = 1; $i <= 5; $i++) {
            echo "Contagem: $i <br>";
        }

        // Exemplo de estrutura de repetição: while
        echo "<h2>Exemplo de loop 'while'</h2>";
        $j = 1;
        while ($j <= 5) {
            echo "Contagem: $j <br>";
            $j++;
        }

        // Exemplo de estrutura de repetição: foreach
        echo "<h2>Exemplo de loop 'foreach lendo frutas de um array'</h2>";
        $frutas = ["Maçã", "Banana", "Laranja"];
        foreach ($frutas as $fruta) {
            echo "Fruta: $fruta <br>";
        }

        // foreach e arrays associativos
        echo "<h2>Exemplo de loop 'foreach' com array associativo</h2>";
        $pessoa = ["nome" => "João", "idade" => 25, "cidade" => "São Paulo"];
        foreach ($pessoa as $chave => $valor) {
            echo "$chave: $valor <br>";
        }
        
    ?>
    
</body>
</html>