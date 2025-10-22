<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <!--$_REQUEST é a junção de $_GET e $_COOKIES-->
    <main>
        <?php
        //var_dump($_GET);
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["snome"] ?? "desconhecido";
        echo "<table border='1'>"; // Inicia a tabela com uma borda simples
        echo "<tr>"; // Abre a primeira linha
        echo "<th>Nome</th>"; // Cabeçalho 1
        echo "<th>Sobrenome</th>"; // Cabeçalho 2
        echo "</tr>"; // Fecha a primeira linha

        echo "<tr>"; // Abre a segunda linha
        echo "<td>$nome</td>"; // Célula 1 da segunda linha
        echo "<td>$sobrenome</td>"; // Célula 2 da segunda linha
        echo "</tr>"; // Fecha a segunda linha

        echo "</table>"; // Fecha a tabela       
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>