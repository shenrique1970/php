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

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <label for="profissao">Profissão:</label>
        <input type="text" id="profissao" name="profissao" required>
        <br><br>
        <label for="opcao">Trabalhando?</label><br>
        <input type="checkbox" id="opcao" name="opcao" value="1">

        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    $nome = $_POST['nome'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $profissao = $_POST['profissao'] ?? '';
    $opcao = isset($_POST['opcao']) ? true : false; // checkbox: true se marcado, false se não

    // É um modelo que define a estrutura e o comportamento de objetos semelhantes.
    class Pessoa
    {
        // Atributos - São as propriedades, características ou variáveis de uma classe. Definem o estado de um objeto.
        public string $nome;
        public int $idade;
        public string $profissao;
        public bool $opcao;
        
        // __construct é um Método - uma função especial que é chamada automaticamente toda vez que um novo objeto de uma classe é criado. Sua principal função é inicializar o objeto.
        // -> operador de objeto - :: operador de resoluçãao de escopo
        public function __construct($nome, $idade, $profissao, $opcao)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->profissao = $profissao;
            $this->opcao = $opcao;
        }

        // Métodos - São as ações, funções ou comportamentos que um objeto pode realizar.
        public function apresentar(): string
        {
            return "Olá, meu nome é " . $this->nome . " e eu tenho " . $this->idade . " anos.";
        }

        public function condicao(): string
        {
            return $this->idade < 18 ? "Sou menor de idade." : "Sou maior de idade.";
        }

        public function empregado(): string
        {
            return $this->opcao ? "Estou trabalhando. Sou um(a) " . $this->profissao : "Não estou trabalhando.";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pessoa = new Pessoa($nome, (int) $idade, $profissao, $opcao);
        //$pessoa->nome = $nome;
        //$pessoa->idade = (int) $idade;
        //$pessoa->profissao = $profissao;
        //$pessoa->opcao = $opcao;

        echo "<p>" . $pessoa->apresentar() . "</p>";
        echo "<p>" . $pessoa->condicao() . "</p>";
        echo "<p>" . $pessoa->empregado() . "</p>";
    } else {
        echo "<p>Por favor, preencha o formulário acima.</p>";
    }
    //$pessoa1 = new Pessoa('sergio', 55, 'programador', 1);
    //echo $pessoa1->apresentar() . "<br>";
    //echo $pessoa1->condicao() . "<br>";
    //echo $pessoa1->empregado();

    ?>

</body>

</html>