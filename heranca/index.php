<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>

<body>
    <h1>Herança.</h1>
    
    <?php

    // Classe base (superclasse)
    class Pessoa
    {
        public string $nome;
        public int $idade;

        public function __construct(string $nome, int $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentar(): string
        {
            return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
        }
    }

    // Subclasse Aluno (herda de Pessoa)
    class Aluno extends Pessoa
    {
        public string $curso;

        public function __construct(string $nome, int $idade, string $curso)
        {
            parent::__construct($nome, $idade); // chama o construtor da classe pai
            $this->curso = $curso;
        }

        public function apresentar(): string
        {
            return parent::apresentar() . " Sou aluno do curso de {$this->curso}.";
        }
    }

    // Subclasse Professor (herda de Pessoa)
    class Professor extends Pessoa
    {
        public string $disciplina;

        public function __construct(string $nome, int $idade, string $disciplina)
        {
            parent::__construct($nome, $idade);
            $this->disciplina = $disciplina;
        }

        public function apresentar(): string
        {
            return parent::apresentar() . " Leciono a disciplina de {$this->disciplina}.";
        }
    }
    
    ?>
    <?php
    $aluno = new Aluno("Lucas", 20, "Engenharia");
    $professor = new Professor("Carla", 45, "Matemática");
    ?>
    <h2>Herança permite que uma classe (filha) reaproveite atributos e métodos de outra classe (pai), promovendo reutilização de código e organização.</h2>
    <h3>Classe pai Pessoa</h3>
    <h3>Sub classes filhas Aluno e Professor, tanto aluno e professor herdam de pessoa nome e idade.</h3>
    <article>
        <p><?php  echo $aluno->apresentar() . "<br>"; ?></p>
        <p><?php echo $professor->apresentar() . "<br>"; ?></p>
    </article>
</body>

</html>