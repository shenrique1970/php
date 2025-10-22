<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Expressões aritméticas</h1>
    </header>
    <section>
        <pre><code>
            $res = 5 + 2 / 2;
            echo "O resultado é $res";
         </code></pre>
        <?php
        $res = 5 + 2 / 2;
        echo "O resultado é $res <br>";
        ?>
        <br>
        <span>
            Ordem de precedência matemática. <br>
            () Parenteses. <br>
            ** Potência. <br>
            * / % Multiplicação Divisão Modulo. <br>
            +- Adição Subtração. <br>
        </span>
    </section>
    <section>
        <pre><code>
                $res2 = 50/2+3**2;
                echo "O resultado é $res2";
            </code></pre>
        <?php
        $resp = 50 / 2 + 3 ** 2;
        echo "O resultado é $resp <br>";
        ?><br>
        <br>
    </section>
    <section>
        <pre><code>
                $res3 = 50/(2+3)**2;
                echo "O resultado é $res3";
            </code></pre>
        <?php
        $res3 = 50 / (2 + 3) ** 2;
        echo "O resultado é $res3";
        ?><br>
    </section>

</body>

</html>