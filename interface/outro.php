<?php

// Exemplo 2: Interface com múltiplos métodos
interface FormaGeometrica {
    public function calcularArea(): float;
    public function calcularPerimetro(): float;
}

class Circulo implements FormaGeometrica {
    private float $raio;

    public function __construct(float $raio) {
        $this->raio = $raio;
    }

    public function calcularArea(): float {
        return pi() * pow($this->raio, 2);
    }

    public function calcularPerimetro(): float {
        return 2 * pi() * $this->raio;
    }
}


// Criando um objeto da classe Circulo
$meuCirculo = new Circulo(5); // raio = 5

// Usando os métodos definidos pela interface
echo "Área do círculo: " . $meuCirculo->calcularArea() . "<br>";
echo "Perímetro do círculo: " . $meuCirculo->calcularPerimetro();

// outro exemplo
class Retangulo implements FormaGeometrica {
    private float $largura;
    private float $altura;

    public function __construct(float $largura, float $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea(): float {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro(): float {
        return 2 * ($this->largura + $this->altura);
    }
}

// polimorfismo
function mostrarForma(FormaGeometrica $forma) {
    echo "Área: " . $forma->calcularArea() . "<br>";
    echo "Perímetro: " . $forma->calcularPerimetro() . "<br><br>";
}

$formas = [
    new Circulo(3),
    new Retangulo(4, 6)
];

foreach ($formas as $forma) {
    mostrarForma($forma);
}
