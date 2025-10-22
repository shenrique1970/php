<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Relógio Dinâmico</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
       <h1>Bem-vindo!</h1> 
    </header>
    
    <?php
        date_default_timezone_set("America/Sao_Paulo");

        $formatter = new IntlDateFormatter(
            'pt_BR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'America/Sao_Paulo',
            IntlDateFormatter::GREGORIAN,
            "EEEE, d 'de' MMMM 'de' yyyy"
        );

        $data_formatada = $formatter->format(new DateTime());
        $hora = date("H:i:s");

        echo "<p>Hoje é $data_formatada</p>";
        echo "<p>Hora atual: $hora</p>";
    ?>

    <section>
        <p>Hora atual: <span id="hora"></span></p>
    </section>
    

    <script src="js/script.js"></script>
</body>

</html>