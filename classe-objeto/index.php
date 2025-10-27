<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe e objetos.</title>
</head>

<body>
    <h1>Classe e objetos em PHP</h1>
    <p>Exemplo de uma classe simples em PHP:</p>
    <?php
        $nome = $_POST['nome'] ?? '';
        $idade = $_POST['idade'] ?? '';
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        // classe
        class Pessoa
        {
            // atributos
            public $nome;
            public $idade;
            
            // método
            public function apresentar()
            {
                // retorna uma string de apresentação
                return "Olá, meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos.";
            }
        }
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            // Cria o objeto e define os atributos
            $pessoa = new Pessoa();
            $pessoa->nome = $nome;
            $pessoa->idade = $idade;

            // Exibe a apresentação
            echo "<p>" . $pessoa->apresentar() . "</p>";
        } else {
            echo "<p>Por favor, preencha o formulário acima.</p>";
        }
    ?>
</body>

</html>