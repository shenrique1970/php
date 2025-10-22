<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
    <!--    escalares    compostos    especiais    -->
    <header>
        <h1>Tipos</h1>
    </header>
    <section>
        <a href="#escalares">Escalares</a>
    <a href="#compostos">compostos</a>
    <a href="#especiais">especiais</a>
    </section>
    
    
    <section>
        <article id="escalares" class="tab active">
            <h2>Escalares</h2>
            <h3>Int</h3>
            <pre><code>
                $idade = 25;
                echo "O resultado é $idade;
            </code></pre>
            <?php
            $idade = 25;
            echo "O resultado é $idade <br>";
            echo "do tipo ";
            var_dump($idade);
            ?>
            <br>

            <h3>float/double</h3>
            <pre><code>
                $preco = 99.90; 
                echo "O resultado é $preco;
            </code></pre>
            <?php
            $preco = 99.90;
            echo "O resultado é $preco <br>";
            echo "do tipo ";
            var_dump($preco);
            ?>
            <br>

            <h3>string</h3>
            <pre><code>
                $mensagem = "Bem-vindo!"; 
                echo "O resultado é $mensagem;
            </code></pre>
            <?php
            $mensagem = "Bem-vindo!";
            echo "O resultado é $mensagem <br>";
            echo "do tipo ";
            var_dump($mensagem);
            ?>
            <br>

            <h3>boolean</h3>
            <pre><code>
                $ativo = true;
                echo "O resultado é $ativo;
            </code></pre>
            <?php
            $ativo = true;
            echo "O resultado é $ativo <br>";
            echo "do tipo ";
            var_dump($ativo);
            ?>
            <br>

            <h3>Em PHP, 0x1A é uma representação de um número inteiro (tipo int) em notação hexadecimal (base 16)</h3>
            <pre><code>
                $num = 0x1A;
                echo "O resultado é $num;
            </code></pre>
            <?php
            $num = 0x1A;
            echo "O resultado é $num <br>";
            echo "do tipo ";
            var_dump($num);
            ?>
            <br>

            <h3>Em PHP, 3e2 é uma variável do tipo float (ponto flutuante).
                Essa notação é a forma como a linguagem interpreta números em
                notação científica.</h3>
            <pre><code>
                $numa = 3e2;
                echo "O resultado é $numa;
            </code></pre>
            <?php
            $numa = 3e2;
            echo "O resultado é $numa <br>";
            echo "do tipo ";
            var_dump($numa);
            echo " Como fazer para mudar o float?";
            ?>
            <pre><code>$numa = (int) 3e2; </code>coerção</pre>
            <?php
                $numa = (int) 3e2;
                var_dump($numa);
            ?>
            <br>

            <pre><code>$numb = (int) "750" </code>coerção</pre>
            <?php
                $numb = (int) "750";
                echo "do tipo ";
                var_dump($numb);
            ?>
            <br>
            <span>0x = HEXADECIMAL 0b = BINÁRIO 0 = OCTAL</span>
            <br>
            <!--
            0x indica que o número está em base 16 (hexadecimal)
            1A é o valor hexadecimal
            e2 ou 3x10 ^2 ou 3x100 = 300
            -->
            <hr>
        </article>
    </section>

    <section>
        <article id="compostos" class="tab">
            <h2>Tipos compostos (não primitivos, mas importantes)</h2>
            <h3>Array.</h3>
            <?php
                $codigo1 = '
                <?php 
                    $frutas = ["maçã", "banana", "laranja"];
                    echo $frutas[1]    //banana;
                ?>';
            ?>
            <pre id="codigo1"><?php echo htmlspecialchars($codigo1); ?></pre>
            <button onclick="copiar('codigo1')">Copiar código</button>

            <hr>
            <h3>Array associativo.</h3>
            <?php
                $codigo2 = '
                <?php 
                    $usuario = ["nome" => "João", "idade" => 30];
                    echo $usuario["nome"] . "<br>"; // João
                ?>';
            ?>
            <pre id="codigo2"><?php echo htmlspecialchars($codigo2); ?></pre>
            <button onclick="copiar('codigo2')">Copiar código</button>

            <hr>
            <h3>Object — instância de uma classe.</h3>
            <?php
                $codigo3 = '
                <?php 
                    class Pessoa
                    {
                        public $nome;
                        public function __construct($nome)
                        {
                            $this->nome = $nome;
                        }
                    }

                    $p = new Pessoa("Maria");
                    echo $p->nome;
                ?>';
            ?>
            <pre id="codigo3"><?php echo htmlspecialchars($codigo3); ?></pre>
            <button onclick="copiar('codigo3')">Copiar código</button>
            <hr>
        </article>
    </section>


    <section>
        <article id="especiais" class="tab">
            <h2>Tipos - especiais</h2>
            <h3>Resource — ponte para recursos externos.</h3>
            <?php
                $arquivo = fopen("exemplo/exemplo.txt", "r");
                    if (is_resource($arquivo)) {
                        echo "Arquivo aberto com sucesso! " . "<br>";
                        fclose($arquivo);
                    } 
                $codigo4 = '
                <?php 
                    $arquivo = fopen("exemplo.txt", "r");
                    if (is_resource($arquivo)) {
                        echo "Arquivo aberto com sucesso!";
                        fclose($arquivo);
                    } 
                ?>';
            ?>
            <pre id="codigo4"><?php echo htmlspecialchars($codigo4); ?></pre>
            <button onclick="copiar('codigo4')">Copiar código</button>
            <hr>
            
            <h3>Callable — função ou método que pode ser chamado.</h3>
            <?php
                function saudacao() {
                        return "Olá!";
                    }

                    $chamada = "saudacao";

                    if (is_callable($chamada)) {
                        echo $chamada(); // Olá!
                    }
                    
                $codigo5 = '
                <?php 
                    function saudacao() {
                        return "Olá!";
                    }

                    $chamada = "saudacao";

                    if (is_callable($chamada)) {
                        echo $chamada();
                    }
                    
                ?>';
            ?>
            <pre id="codigo5"><?php echo htmlspecialchars($codigo5); ?></pre>
            <button onclick="copiar('codigo5')">Copiar código</button>
            <hr>

            <h2>Null — ausência de valor.</h2>
            <?php
                $usuario = null;

                    if (is_null($usuario)) {
                        echo "Usuário não definido.";
                    }
                $codigo6 = '
                <?php
                    $usuario = null;

                    if (is_null($usuario)) {
                        echo "Usuário não definido.";
                    }
                ?>';
            ?>
            <pre id="codigo6"><?php echo htmlspecialchars($codigo6); ?></pre>
            <button onclick="copiar('codigo6')">Copiar código</button>
            <hr>
            <h3><b>mixed — tipo genérico (usado em declarações de função)</b></h3>               
            <?php
                function processar(mixed $entrada): mixed
                    {
                        if (is_array($entrada)) {
                            return count($entrada);
                        } elseif (is_string($entrada)) {
                            return strtoupper($entrada);
                        } else {
                            return $entrada;
                        }
                    }

                    echo processar("texto") . "<br>";       // TEXTO
                    echo processar([1, 2, 3]) . "<br>";     // 3
                    echo processar(42) . "<br>";            // 42
                $codigo7 = '
                <?php
                    function processar(mixed $entrada): mixed
                    {
                        if (is_array($entrada)) {
                            return count($entrada);
                        } elseif (is_string($entrada)) {
                            return strtoupper($entrada);
                        } else {
                            return $entrada;
                        }
                    }

                    echo processar("texto");      
                    echo processar([1, 2, 3]);     
                    echo processar(42);           
                ?>';
            ?>
            <pre id="codigo7"><?php echo htmlspecialchars($codigo7); ?></pre>
            <button onclick="copiar('codigo7')">Copiar código</button>
            <hr>
        </article>
    </section>

    <script src="../js/script.js"></script>
</body>

</html>