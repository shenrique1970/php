<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Desafio 1</h1>
    </header>
    <section>
        <h3>Antecessor e sucessor.</h3>
        <form action="des.php" method="get">
            <label for="numero">Digito um numero</label>
            <input type="number" name="numero" id="idnumero">
            <input type="submit" value="Enviar">
        </form>
    </section>
    <section>
        <!--Mostrar código-->
        <pre><code>
            
            echo "Número digitado: " . $numero;
            echo "Número anterior: " . ($numero - 1);
            echo "Número posterior: " . ($numero + 1);
            
        </code></pre>
        
    </section>

</body>

</html>