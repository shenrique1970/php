<?php
// Define a interface que Define métodos obrigatórios - Exemplo 1: Interface Autenticavel.
interface Autenticavel {
    public function login(string $usuario, string $senha): bool;
}

// Classe Usuario que implementa a interface. implements - Classe se compromete a implementar os métodos da interface
class Usuario implements Autenticavel {
    private string $usuario = "admin";
    private string $senha = "1234";

    public function login(string $usuario, string $senha): bool {
        return $usuario === $this->usuario && $senha === $this->senha;
    }
}

// Exemplo de uso
$u = new Usuario();
if ($u->login("admin", "1234")) {
    echo "Login bem-sucedido!";
} else {
    echo "Falha no login.";
}

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
