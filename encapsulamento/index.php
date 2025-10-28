<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento.</title>
</head>

<body>
    <h1>Encapsulamento.</h1>
    <?php
    // Exemplo: Classe ContaBancaria com encapsulamento
    class ContaBancaria
    {
        // Propriedades privadas (encapsuladas)
        private string $titular;
        private float $saldo;

        // Construtor
        public function __construct(string $titular, float $saldoInicial)
        {
            $this->titular = $titular;
            $this->saldo = $saldoInicial;
        }

        // Método público para exibir saldo
        public function verSaldo(): string
        {
            return "Saldo de {$this->titular}: R$ " . number_format($this->saldo, 2, ',', '.');
        }

        // Método público para depositar
        public function depositar(float $valor): void
        {
            if ($valor > 0) {
                $this->saldo += $valor;
            }
        }

        // Método público para sacar
        public function sacar(float $valor): void
        {
            if ($valor > 0 && $valor <= $this->saldo) {
                $this->saldo -= $valor;
            }
        }
    }

    // Uso da classe
    echo "João tem 1000 /titular e saldo não é mostrado por ser privado, só é modificado pelos métodos depoistar() sacar()  e saldo() /<br>";
    $conta = new ContaBancaria("João", 1000);
    echo "Foi depositado  250 <br>";
    $conta->depositar(250);
    echo "Foi sacado 100 <br>";
    $conta->sacar(100);
    echo $conta->verSaldo(); // Saída: Saldo de João: R$ 1.150,00
    var_dump($titular, $saldo);
    echo "<br> <br> <br>";

    echo "Tereza tem 5000 /titular e saldo não é mostrado por ser privado, só é modificado pelos métodos depoistar() sacar()  e saldo() /<br>";
    $conta = new ContaBancaria("Tereza", 5000);
    echo "Foi depositado  250 <br>";
    $conta->depositar(250);
    echo "Foi sacado 3000 <br>";
    $conta->sacar(3000);
    echo $conta->verSaldo();
    var_dump($titular, $saldo);
    echo "<br><br><br>";
    
    echo "O que está encapsulado?";
    echo "As propriedades $\ titular e $\ saldo são privadas, ou seja, não podem ser acessadas diretamente de fora da classe.<br>";

    echo "O acesso e modificação do saldo só é possível através dos métodos públicos depositar(), sacar() e verSaldo().";

    ?>
</body>

</html>