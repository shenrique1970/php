<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - condicionais.</title>
</head>
<body>
    <h1>Estruturas Condicionais em PHP</h1>

    <?php
        $numero = 10;

        // Estrutura if
        if ($numero > 0) {
            echo "<p>O número $numero é positivo.</p>";
        }

        // Estrutura if...else
        if ($numero % 2 == 0) {
            echo "<p>O número $numero é par.</p>";
        } else {
            echo "<p>O número $numero é ímpar.</p>";
        }

        // Estrutura if...elseif...else
        if ($numero < 0) {
            echo "<p>O número $numero é negativo.</p>";
        } elseif ($numero == 0) {
            echo "<p>O número é zero.</p>";
        } else {
            echo "<p>O número $numero é positivo.</p>";
        }

        // Estrutura switch
        $dia = 3;
        switch ($dia) {
            case 1:
                echo "<p>Hoje é Segunda-feira.</p>";
                break;
            case 2:
                echo "<p>Hoje é Terça-feira.</p>";
                break;
            case 3:
                echo "<p>Hoje é Quarta-feira.</p>";
                break;
            case 4:
                echo "<p>Hoje é Quinta-feira.</p>";
                break;
            case 5:
                echo "<p>Hoje é Sexta-feira.</p>";
                break;
            case 6:
                echo "<p>Hoje é Sábado.</p>";
                break;
            case 7:
                echo "<p>Hoje é Domingo.</p>";
                break;
            default:
                echo "<p>Número do dia inválido.</p>";
                break;
        }
    ?>
    
</body>
</html>