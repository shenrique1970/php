<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estaticos.</title>
</head>

<body>
    <h1>Exemplo 1: Classe com método e propriedade estática</h1>

    <?php
    // Exemplo 1: Classe com propriedades e métodos estáticos
    class Utilidades
    {
        // Propriedade estática
        public static string $versao = "1.0.0";
        // static	Define que a propriedade ou método pertence à classe
        // Método estático
        public static function saudacao(string $nome): string
        {
            // self::	Usado dentro da classe para acessar membros estáticos
            // :: operador de resoluçãao de escopo
            return "Olá, $nome! Bem-vindo à versão " . self::$versao;
        }
    }

    // Acessando diretamente sem criar objeto
    // ClassName::	Usado fora da classe para acessar membros estáticos
    echo Utilidades::saudacao("Sérgio"); // Olá, Sérgio! Bem-vindo à versão 1.0.0
    echo "<br>";
    // operador de resoluão de escopo :: permite acesso a uma constante. a uma propriedade estatica. ou metodo estatico...
    echo "Versão do sistema: " . Utilidades::$versao;
    ?>

    <h2>Exemplo 2: Contador de instâncias com propriedade estática</h2>
    <?php
    // Exemplo 2: Contador de instâncias com propriedade estática
    class Contador
    {
        public static int $total = 0;

        public function __construct()
        {
            self::$total++;
        }

        public static function mostrarTotal(): int
        {
            return self::$total;
        }
    }

    // Criando objetos
    new Contador();
    new Contador();
    new Contador();
    new Contador();
    new Contador();
    new Contador();

    echo "Total de objetos criados: " . Contador::mostrarTotal(); // 3
    ?>
</body>

</html>