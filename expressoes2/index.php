<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritméticas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Funções aritméticas</h1>
    </header>
    <section>
        <pre><code>
            $r = abs(-500);
            print("A resposta é $r");
        </code></pre>
        <?php
        $r = abs(-500);
        print("A resposta é $r");
        ?>
    </section>
    <section>
        <pre><code>
            $r1 = base_convert(254, 10, 2);
            $r2 = base_convert(254, 10, 8);
            $r3 = base_convert(254, 10, 16);
            print(" $r1 binario.");
            print(" $r2 base 10 para base 8.");
            print(" $r3 Hexadecimal.");
        </code></pre>
        <?php
        $r1 = base_convert(254, 10, 2);
        $r2 = base_convert(254, 10, 8);
        $r3 = base_convert(254, 10, 16);
        print(" $r1 binario. <br> ");
        print(" $r2 base 10 para base 8. <br> ");
        print(" $r3 Hexadecimal. <br>");
        ?>
    </section>
    <section>
        <pre><code>
            $r1 = 5 / 2;
            $r2 = 5 % 2;
            $r3 = intdiv(5, 2);
            $r4 = min(5, 2, 3, 6, 7, 8);
            $r5 = max(5, 2, 3, 6, 7, 8);
            $r6 = pi();
            $valor = 4.3;
            $valor2 = 4.9;
            $valor3 = 4.4;
            $valor4 = 4.5;
            $a = 3;
            $b = 4;
            $potencia = pow(5,2);
            $angulo = deg2rad(30); // converte graus para radianos
            $angulo = deg2rad(60);
            $numero = 49;
            $hipotenusa = sqrt($a**2 + $b**2);
            print ("A divisão de 5/2 é $r1")";
            print ("O resto é $r2");
            print ("A parte inteira é $r3");
            print ("O minimo é $r4");
            print ("O maximo é $r5");
            print ("O valor de PI $r6");
            echo "Arredonda pra cima - ceil($valor) = " . ceil($valor);
            echo "Arredonda pra baixo - floor($valor2) = " . floor($valor2);
            echo "Arredonda com base na parte decimal - round($valor3) = " . round($valor3);
            echo "Arredonda com base na parte decimal - round($valor4) = " . round($valor4);
            echo round(4.567, 2);
            echo "Calcula a hipotenusa - hypot($a, $b) = " . hypot($a, $b);
            echo "Potência $potencia";
            echo "sin(30°) = " . sin($angulo);
            echo "cos(60°) = " . cos($angulo);
            echo "tan(45°) = " . tan($angulo);
            echo "sqrt($numero) = " . sqrt($numero);
            echo "Hipotenusa = " . $hipotenusa;
        </code></pre>
        <?php
            $r1 = 5 / 2;
            $r2 = 5 % 2;
            $r3 = intdiv(5, 2);
            $r4 = min(5, 2, 3, 6, 7, 8);
            $r5 = max(5, 2, 3, 6, 7, 8);
            $r6 = pi();
            $valor = 4.3;
            $valor2 = 4.9;
            $valor3 = 4.4;
            $valor4 = 4.5;
            $a = 3;
            $b = 4;
            $potencia = pow(5,2);
            $angulo = deg2rad(30); // converte graus para radianos
            $angulo = deg2rad(60);
            $numero = 49;
            $hipotenusa = sqrt($a**2 + $b**2);
            echo "<hr>";
            print ("A divisão de 5/2 é $r1") . "<br>";
            print ("O resto é $r2") . "<br>";
            print ("A parte inteira é $r3") . "<br>";
            print ("O minimo é $r4") . "<br>";
            print ("O maximo é $r5") . "<br>";
            print ("O valor de PI $r6") . "<br>";
            echo "Arredonda pra cima - ceil($valor) = " . ceil($valor) . "<br>";
            echo "Arredonda pra baixo - floor($valor2) = " . floor($valor2) . "<br>";
            echo "Arredonda com base na parte decimal - round($valor3) = " . round($valor3) . "<br>"; 
            echo "Arredonda com base na parte decimal - round($valor4) = " . round($valor4) . "<br>";
            echo round(4.567, 2) . "<br>";
            echo "Calcula a hipotenusa - hypot($a, $b) = " . hypot($a, $b) . "<br>";
            echo "Potência $potencia" . "<br>";
            echo "sin(30°) = " . sin($angulo) . "<br>";
            echo "cos(60°) = " . cos($angulo) . "<br>";
            echo "tan(45°) = " . tan($angulo) . "<br>";
            echo "sqrt($numero) = " . sqrt($numero) . "<br>";
            echo "Hipotenusa = " . $hipotenusa;
        ?>
    </section>
    <section>
        <h3>Operadores aritiméticos.</h3>
        <pre><code>
            echo "Adição: $a + $b = " . ($a + $b);
            echo "Subtração: $a - $b = " . ($a - $b);
            echo "Multiplicação: $a * $b = " . ($a * $b);
            echo "Divisão: $a / $b = " . ($a / $b);
            echo "Módulo: $a % $b = " . ($a % $b);
            echo "Potência: $a ** $b = " . ($a ** $b);
            $t = "2" . "2";
        </code></pre>
        <?php
            echo "Adição: $a + $b = " . ($a + $b) . "<br>";         // 13
            echo "Subtração: $a - $b = " . ($a - $b) . "<br>";      // 7
            echo "Multiplicação: $a * $b = " . ($a * $b) . "<br>";  // 30
            echo "Divisão: $a / $b = " . ($a / $b) . "<br>";        // 3.333...
            echo "Módulo: $a % $b = " . ($a % $b) . "<br>";         // 1
            echo "Potência: $a ** $b = " . ($a ** $b) . "<br>";     // 1000
            $t = "2" . "2";
            var_dump($t);
        ?>
    </section>

</body>

</html>