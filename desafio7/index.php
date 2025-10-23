<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <header>
        <h1>Salário</h1>
    </header>
    <main>
        <!--$_SERVER['PHP_SELF'] envia o formulario pra ele mesmo -->
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="renda">Informe o salário?</label>
            <input type="number" name="renda" step="0.01">
            <label for="salario">Informe o salário minimo vigente?</label>
            <input type="number" name="salario" step="0.01">
            
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php 
        $renda = (int) $_POST["renda"] ?? 0;
        $sal = (int) $_POST["salario"];
    ?>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $quant = intdiv($renda, $sal); // ou usar (int) ($renda / $sal);
            $dif = $renda % $sal;    // o resto da divião é a diferença de salário.
            
            if (!$_POST) {
                echo "<span>Aguardando o envio dos dados...</span>";
                return;
            }    
        ?>  
        <article>
           <span>Considerando o salário minimo de <b>R$ <?= number_format($sal, 2, ",", ".") ?></b></span>
            <span>Quem recebe R$ <?= number_format($renda, 2, ",", ".") ?> recebe <?= $quant ?> salário(s) mínimo(s) mais a diferença de R$ <?= number_format($dif, 2, ",", ".") ?></span> 
        </article>  
    </section>
</body>
</html>