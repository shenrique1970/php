<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Manipulação de Strings</h1>
    </header>

    <!--    double quote, single quoted, heredoc, nowdoc   -->
    <section>
        <h3>Aspas duplas - double quoted "" e Aspas simples - single quoted ''</h2>
            <pre><code>echo "Existe interpretação dentro de aspas duplas." . " PHP\u{1F418}";</code></pre>
            <?php echo "Existe interpretação dentro de aspas duplas." . " PHP\u{1F418}"; ?>
            <br>
            <?php $nome = "Fulano";
            $sobrenome = "de Tal"; ?>
            <pre><code>echo "Olá, $nome $sobrenome";</code></pre>
            <?php echo "Olá, $nome $sobrenome <br>"; ?>
            <pre><code>echo "Olá, $nome \u{1F596}";</code></pre>
            <?php echo "Olá, $nome \u{1F596} <br>"; ?>
    </section>

    <section>
        <h3>Constantes - exemplo: não funciona "" nem '' o correto é concatenar.</h3>
        <pre><code>echo "moro no ESTADO";</code></pre>
        <?php const ESTADO = "RJ"; ?>
        <?php echo "moro no ESTADO"; ?>

        <br>

        <pre><code>echo "Moro no " . ESTADO</code></pre>

        <?php echo "moro no " . ESTADO . "<br>"; ?>

        <pre><code>const ESTUDAR = "estudar programação \u{1F499}";</code></pre>
        <pre><code>echo "Eu amo " . ESTUDAR;</code></pre>
        <?php const ESTUDAR = "estudar programação \u{1F499}";
        echo "Eu amo " . ESTUDAR . "<br>"; ?>

        <pre><code>echo "Estamos no ano de " . date('Y');</code></pre>
        <?php echo "Estamos no ano de " . date('Y'); ?>
        <br>
    </section>

    <section>
        <h3>o uso de aspas duplas dentro de aspas simples.</h3>
        <pre><code>echo '$nom "Apelido" $snom';</code></pre>
        <?php echo '$nom "Apelido" $snom'; ?>
        <pre><code>echo "$nom "Apelido" $snom";</code>erro</pre>
    </section>

    <section>
        <h3>Forma correta é usar a sequencia de escape.</h3>
        <pre><code>echo \"$nom "Apelido\" $snom";</code></pre>
        <?php $nom = "Fulano";
        $snom = "de Tal"; ?>
        <?php echo "$nom \"Apelido\" $snom" . "<br>"; ?>
    </section>

    <section>
        <h4>Sequencia de escape com aspas duplas. Existem outras. </h4>
        <p>
            \n Nova linha. <br>
            \t Tabulação. <br>
            \\ Mostrar uma contra barra. <br>
            \$ Mostrar um $.<br>
            \u{} Codepoint Unicode. <br>
        </p>
    </section>

    <section>
        <h3>Sintaxe Herodoc</h3>
        <pre><code>
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
        Estou aprendendo $curso 
        no ano de $ano
        Olá, $nome \u{1F596}
        FRASE;
    </code></pre>
        <?php
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
        Estou aprendendo $curso 
            no ano de $ano
        Olá, $nome \u{1F596}
        FRASE;
        ?>
    </section>

    <section>
        <h3>Sintaxe Nowdoc</h3>
        <pre><code>
        $curso = "PHP";
        $ano = date('Y');
        echo <<< 'FRASE'
        Estou aprendendo $curso 
        no ano de $ano
        Olá, $nome \u{1F596}
        FRASE;
    </code></pre>
        <?php
        $curso = "PHP";
        $ano = date('Y');
        echo <<< 'FRASE'
        Estou aprendendo $curso 
            no ano de $ano
        Olá, $nome \u{1F596}
        FRASE;
        ?>
    </section>

</body>

</html>