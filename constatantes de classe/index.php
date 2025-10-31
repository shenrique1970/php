<?php
// Exemplo 1: Constante simples em uma classe
class Configuracao
{
    public const VERSAO = "1.2.0";
    public const AMBIENTE = "produção";
}

// Acessando constantes da classe
echo Configuracao::VERSAO;     // Saída: 1.2.0
echo "<br>";
echo Configuracao::AMBIENTE;   // Saída: produção

?>

<?php 
// Define a classe base Animal
class Animal
{
    // Constante da classe Animal
    public const TIPO = "Mamífero";
}

// Define a classe Cachorro que herda de Animal precisa ser abstract, sua falta da erro.
abstract class Cachorro extends Animal
{
    // Constante específica da classe Cachorro
    public const SOM = "Au au!";
}

// Acessa a constante herdada da classe Animal
echo Cachorro::TIPO; // Saída: Mamífero
echo "<br>";

// Acessa a constante definida na própria classe Cachorro
echo Cachorro::SOM;  // Saída: Au au!
?>


<?php
class App {
    public const NOME = "MeuSistema";

    public function mostrarNome() {
        return self::NOME; // ou static::NOME para late static binding
    }
}

$app = new App();
echo $app->mostrarNome(); // Saída: MeuSistema
?>