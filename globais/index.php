<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globais</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <section>
        <h1>Variáveis globais.</h1>
    </section>
    <!-- $_GET $_POST $_REQUEST -->
    <main>
        <pre><code>
            $_GET Variáveis de string de consulta.
            $_POST Dados de formulário de requisições POST HTTP.
            $_REQUEST Variáveis de requisição HTTP.
            $GLOBALS Referencia todas variáveis disponíveis no escopo global.
            $_SERVER Informação do servidor e ambiente de execução.
            $_FILES Variáveis de Upload de Arquivos HTTP.
            $_COOKIE Cookies HTTP.
            $_SESSION Variáveis de sessão.
            $_ENV Variáveis de ambiente.
            <span>https://www.php.net/manual/pt_BR/language.variables.superglobals.php</span>
        </code></pre>
        <pre>
             <?php

                setcookie("dia-da-semana","DOMINGO",time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Super global GET.</H1>";
                var_dump($_GET);
                echo "<span>query string globais/?nome=sergio&idade=55</span>";

                echo "<h1>Super global POST.</H1>";
                var_dump($_POST);

                echo "<h1>Super global REQUEST.</H1>";
                var_dump($_REQUEST);

                echo "<h1>Super global COOKIE.</H1>";
                var_dump($_COOKIE);

                echo "<h1>Super global SESSION.</H1>";
                var_dump($_SESSION);

                echo "<h1>Super global ENV.</h1>";
                var_dump($_ENV);
                
                echo "<h1>Super global SERVER.</H1>";
                //var_dump($_SERVER);

                echo "<h1>Super global globals.</h1>";
                var_dump($GLOBALS);
                ?>
                
        </pre>

    </main>

</body>

</html>